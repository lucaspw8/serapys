<?php

namespace App\Http\Controllers;

use App\Models\Memories;
use Exception;
use Illuminate\Http\Request;

class MemoriesController extends Controller
{
    private $userSession = 'user_type';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session($this->userSession) == 'user'){
            return view('user.index');
        }elseif (session($this->userSession) == 'admin'){
            return view('admin.index');
        }else{
            return redirect()->route('user_type.index');
        }
    }

    public function memories()
    {
        if (session($this->userSession) == 'user'){
            $memories = Memories::paginate(4);
            return view('user.memories', compact('memories'));
        }elseif (session($this->userSession) == 'admin'){
            $memories = Memories::paginate(10);
            return view('admin.memories', compact('memories'));
        }else{
            return redirect()->route('user_type.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (session($this->userSession) == 'admin'){
            return view('admin.create-memory');
        }else{
            return redirect()->route('user.index');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{
            if ($request->file('avatar')->isValid()){
                $avatar = $request->file('avatar')->store('avatar');
                //Modelo do objeto
                $memory = new Memories();
                //Atribuição dos valores
                $memory->avatar = $avatar;
                $memory->name = $request->name;
                $memory->surname = $request->surname;
                $memory->bird = $request->bird;
                $memory->death = $request->death;
                $memory->biography = $request->biography;

                $status = $memory->save();
                if ($status){
                    if (session($this->userSession) == 'user'){
                        return redirect()->route('memories.index')->with('ok', 'Success save');
                    }elseif (session($this->userSession) == 'admin'){
                        return redirect()->route('admin.memories.index')->with('ok', 'Success save');
                    }
                }
            }
        }catch (Exception $e){
            return redirect()->route('memories.index')->with("erro","erro $e");
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $memory = Memories::find($id);
        return view('admin.edit-memory', compact('memory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $memory = Memories::find($id);

            if ($request->file('avatar') != null){
                $avatar = $request->file('avatar')->store('avatar');
                $memory->avatar = $avatar;
            }
    
            $memory->name = $request->name;
            $memory->surname = $request->surname;
            $memory->bird = $request->bird;
            $memory->death = $request->death;
            $memory->biography = $request->biography;

            $status = $memory->save();
            if ($status){
                if (session($this->userSession) == 'user'){
                    return redirect()->route('memories.index')->with('ok', 'Success save');
                }elseif (session($this->userSession) == 'admin'){
                    return redirect()->route('admin.memories.index')->with('ok', 'Success save memory');
                }
            }

        }catch (Exception $e){

        }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $memory = Memories::find($id);
            $memory->delete();
            return redirect()->route('admin.memories.index')->with('ok', 'Success delete memory');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
