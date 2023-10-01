<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //memberテーブルからname,phone,email1を$membersに格納
        $members = DB::table('members')
            ->select('id', 'name', 'phone', 'email')
            ->get();
        //viewに返す()
        return view('/index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //新規登録画面に返す
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // フォームで入力された値の登録処理
        $member = new Member;

        $member->name = $request->input('name');
        $member->phone = $request->input('phone');
        $member->email = $request->input('email');

        $member->save();

        // 一覧画面にリダイレクト
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 詳細画面表示
        $member = Member::find($id);
        return view('/show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 編集画面表示
        $member = Member::find($id);

        return view('/edit', compact('member'));
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
        // 更新処理
        $member = Member::find($id);

        $member->name = $request->input('name');
        $member->phone = $request->input('phone');
        $member->email = $request->input('email');

        //DBに保存
        $member->save();

        //処理が終わったら/indexにリダイレクト
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 削除処理
        $member = Member::find($id);

        $member->delete();

        return redirect('/');
    }
}
