<?php

namespace App\Http\Controllers\Admin;
use Illuminate\support\Str;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    private  $repository; 

    public function __constructor (Plan $plan){
        $this->repository = $plan;
    }
    public function index()
    {
        $plans = $this->repository->latest->paginate(10);
        return view('admin.pages.plans.index',[
            'plans'=>$plans,
        ]
    );
    }
    public function create(){
        
        
        return view('admin.pages.plans.create');

    }
    public  function store(Request $request)
    {
        $data=$request->all();
        $data['url']=Str::kebab($request->name);
        $this->repository->create($data);
        return redirect()->route('plans.index');
    }
}
