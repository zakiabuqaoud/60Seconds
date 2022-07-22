<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use App\Models\Client;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class clientsController extends Controller
{
    public function index()
    {

        $clientId = 0;
        $clients = Client::get();
        return view('admin.client.index', compact('clients', 'clientId'));
    }
    public function create()
    {
        $this->authorize('allClients', Client::class);
        $permissions = config('permissions');
        return View(
            'admin.client.create',
            compact('permissions')
        );
    }
    public function store(Request $request)
    {
        $this->authorize('allClients', Client::class);
        $i = 0;

        $request->validate([
            "name" => "required",
            "content" => "required",
            "select" => "integer"

        ]);
        DB::beginTransaction();
        try {
            $creator = new CreateNewUser();
            $user = $creator->create($request->all());
            $permissions = $request->post('permission', []);

            foreach ($permissions as $value) {
                DB::table('users_Permissions')->insert([
                    'user_id' => $user->id,
                    'permission' => $value,
                    'created_at' => Carbon::now(),
                ]);
            }

            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
        }
        //dd(config('permissions'));
        foreach (config('permissions') as $per => $label) {
            if (in_array($per, $permissions)) {
                $i = $i + 1;
            }
        }
        if ($i == 3) {
            $user->isSuperAdmin = 1;
            $user->type = 'admin';
            $user->save();
        }
        if ($i == 1 || $i == 2) {
            $user->isSuperAdmin = 0;
            $user->type = 'admin';
            $user->save();
        }
        if ($i == 0) {
            $user->isSuperAdmin = 0;
            $user->save();
        }



        $data = $request->except('image');
        //  dd($request->post('image'));
        //  dd($request->hasFile('image'));
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $data['image'] = $file->store('image', 'public');
            }
        }

        $data['image'] = $request->post('image');
        $data['name'] = [
            'en' => $request->post('name'),
            'ar' => $request->post('nameArabic')
        ];
        $data['content'] = [
            'en' => $request->post('content'),
            'ar' => $request->post('contentArabic')
        ];
        $data['email'] = $request->post('email');
        $client = Client::create($data);
        if ($request->has('select')) {
            $client->evaluation = $request->select;
            $client->save();
        }

        return redirect()->route('clients.index');
    }
    public function edit($id)
    {
        $client =  Client::findOrFail($id);
        $this->authorize('allClients', $client);
        $permissions = config('permissions');
        return view('admin.client.edit', compact('client', 'permissions'));
    }
    public function update(Request $request, $id)
    {
        $i = 0;
        $request->validate([
            "name" => "required",
            "content" => "required",
            "select" => "integer"
        ]);
        DB::beginTransaction();
        $user = User::where('email', $request->post('oldEmail'))->first();
        $user->update($request->all());
        $permissions = $request->post('permission', []);
        DB::table('users_permissions')->where('user_id', $user->id)->delete();
        try {
            foreach ($permissions as $value) {
                DB::table('users_Permissions')->insert([
                    'user_id' => $user->id,
                    'permission' => $value,
                    'created_at' => Carbon::now(),
                ]);
            }

            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
        }
        foreach (config('permissions') as $per => $label) {
            if (in_array($per, $permissions)) {
                $i = $i + 1;
            }
        }
        if ($i == 3) {
            $user->isSuperAdmin = 1;
            $user->type = 'admin';
            $user->save();
        }
        if ($i == 1 || $i == 2) {
            $user->isSuperAdmin = 0;
            $user->type = 'admin';
            $user->save();
        }
        if ($i == 0) {
            $user->isSuperAdmin = 0;
            $user->type = 'client';
            $user->save();
        }
        $oldImage = false;
        $client = Client::FindOrFail($id);
        $this->authorize('allClients', $client);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if ($image->valid()) {
                $data['image'] = $image->store('images', 'public');
                $oldImage = $client->image;
            }
        }
        if ($oldImage) {
            Storage::disk('public')->delete($oldImage);
        }
        $data['name'] = [
            'en' => $request->post('name'),
            'ar' => $request->post('nameArabic')
        ];
        $data['content'] = [
            'en' => $request->post('content'),
            'ar' => $request->post('contentArabic')
        ];
        $data['email'] = $request->post('email');
        $client->update($data);
        return redirect()->route('clients.index');
    }
    public function delete($id)
    {
        $client = Client::findOrFail($id);
        $this->authorize('allClients', $client);
        $client->delete();
        return redirect()->route('clients.index');
    }
}
