<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProposalStoreRequest;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProposalController extends Controller
{
    public function index()
    {
        return Proposal::all();
    }
    public function show(Proposal $proposal)
    {
        return $proposal;
    }
    public function store(ProposalStoreRequest $request)
    {
        $user = Auth::user();
        $proposal = $request->all() + ['user_id'=> $user['id']];
        return Proposal::create($proposal);
    }

    public function update(ProposalStoreRequest $request, Proposal $proposal)
    {
        $user = Auth::user();
        $proposal2 = $request->all() + ['user_id'=> $user['id']];
        $proposal->update($proposal2);

        return $proposal;
    }

    public function destroy(Proposal $proposal)
    {
        $proposal->delete();
        return [
            "deleted" => true
        ];
    }
}
