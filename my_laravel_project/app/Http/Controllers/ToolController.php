<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use App\Models\User;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index(Request $request)
    {
        // $userTools = User::find(1)->allUserTools;

        $tools = Tool::join('users', 'users.id', '=', 'tools.user_id')
            ->select('tools.id', 'tool', 'province', 'name', 'email', 'user_id', 'available')
            ->where([['tool', $request->tool], ['province', $request->province]])
            ->get();

        // dd($userTools);
        return view('searched-tools', compact('tools'));
    }

    public function reserveTool(Request $request)
    {
        $wishedTool = Tool::join('users', 'users.id', '=', 'tools.user_id')
            ->select('tools.id', 'tool', 'province', 'name', 'email', 'user_id')
            ->where('tools.id', $request->toolId)
            ->first();

        // dd($wishedTool);
        return view('reservation', compact('wishedTool'));
    }

    public function addTool(Request $request)
    {
        $newTool = array(
            'user_id' => auth()->id(),
            'tool' => $request->tool,
            'province' => $request->province,
            'available' => 1,
        );

        Tool::create($newTool);

        return view('add-tool');
    }
}
