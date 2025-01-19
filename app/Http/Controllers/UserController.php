<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$users = DB::table('users')->get();
 
    	// mengirim data ke view
    	return view('VUser',['users' => $users]);
 
    }

	public function add(Request $request)
	{
	
		DB::table('users')->insert([
			'name' => $request->name,
			'email' => $request->email,
			'password' => Hash::make($request->password), // Enkripsi password
			'type' => $request->type,
		]);
	
		return redirect('/user')->with('success', 'User added successfully.');
	} 

	public function hapus(Request $request)
    {
		$id=$request->id;
		DB::table('users')->where('id',$id)->delete();

		return redirect('/user');
 
    }
	public function edit(Request $request)
{

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'type' => $request->type,
    ];

    // Jika password diubah, enkripsi password baru
    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->password);
    }

    // Update data di database
    DB::table('users')->where('id', $request->id)->update($data);

    return redirect('/user')->with('success', 'User updated successfully.');
}
}
