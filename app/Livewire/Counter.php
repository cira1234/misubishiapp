<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\cars;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Counter extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $name_car;
    public $detail_car;
    public $price_car;

    // #[Rule('nullable|sometimes|image|max:2048')]
    // public $image_car;
    // public $swal_id_car;
    public $swal_id_car;
    public $swal_name_car;
    public $swal_detail_car;
    public $swal_price_car;
    public $search;
    public  $namepopup=false;
    
    public function render()
    {
        return view('livewire.counter',['item'=>cars::latest()->where('name_car','like',"%{$this->search}%")->paginate()]);
    }

    

    public function insertdatabase() {
        $userid = Auth::id();
        $validated = $this->validate([
            'name_car' => 'required|min:3',
            'detail_car' => 'required|min:3',
            'price_car' => 'required|min:3',
            
            
            // 'image_car' => 'nullable|sometimes|image|max:2048',
           
        ]);

        $validated['car_user_by']=$userid;
    
        
    // if ($this->image_car) {
    //     $imagePath = $this->image_car->store('uploads', 'public'); // Store the image
    //     $validated['image_car'] = $imagePath;
    // }
        
        cars::create($validated);

        $this->reset('name_car'); 
        $this->reset('detail_car'); 
        $this->reset('price_car'); 
        // $this->reset('image_car'); 

        session()->flash('success', 'Created.');

    }


    
    public function addpopup($id_car){
        //dd($id_car);//print
        $this->namepopup=true;


        $this->swal_id_car = $id_car;


        $this->swal_name_car = cars::find($this->swal_id_car)->name_car;//ขื่อดาต้าเบสคือ name_car ไม่ใช่ตัวแปร
        $this->swal_detail_car = cars::find( $this->swal_id_car)->detail_car;
        $this->swal_price_car = cars::find($this->swal_id_car)->price_car;

        $validated = $this->validate([
            'swal_name_car' => 'required|min:3',
            'swal_detail_car' => 'required|min:3',
            'swal_price_car' => 'required|min:3',
        ]);

        session()->flash('success', 'Created.');
    }


    public function test(){
        dd('insert test');
    }


    
    public function delete($id) {
        cars::find($id)->delete('id');
    }

    
    public function update() {
        dd('test');
        cars::find($this->swal_id_car)->update([
            'name_car' => $this->swal_name_car,
            'detail_car' => $this->swal_detail_car,
            'price_car' => $this->swal_price_car,
        ]);
    }

   
}
