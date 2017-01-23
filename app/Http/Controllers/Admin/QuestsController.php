<?php

namespace App\Http\Controllers\Admin;

use App\Quest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class QuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \Response::view('admin.quests.index', [
            'quests' => Quest::with('images')
                ->orderBy('id', 'desc')
                ->paginate('10')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \Response::view('admin.quests.edit', [
            'quest' => Quest::with('images')->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newQuest = Quest::find($id);
        $dataValidation = $newQuest->validate($request->all());

        if ($dataValidation->fails()) return redirect()->back()->withInput()->with('errors', $dataValidation->errors());

        $newQuest->update($request->all());
        if ($newQuest->save()) return redirect()->back()->with('message', 'Квест успешно обновлён');

        return redirect()->back()->with('message', 'Внутренняя ошибка');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
