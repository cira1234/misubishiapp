<div>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        @vite('resources/css/app.css')
        
      </head>
    <body>
     

    <style>
    body { 
      font-size: 100%; 
    }
    
    h2 {
      text-align: center;
      padding: 20px 0;
    }
    
    table caption {
      padding: .5em 0;
    }
    
    table.dataTable th,
    table.dataTable td {
      white-space: nowrap;
      
    }
    
    .p {
      text-align: center;
      padding-top: 140px;
      font-size: 14px;
    }
    
    </style>
    
    
    <div class="container mt-20"  >
    <form class="max-w-sm mx-auto">
    
    <style>
        .containerfordfix{
            display:flex;
        }
    </style>
    <div class="containerfordfix">
    
      <div>
       <!-- counter.blade.php -->

<form  >
<div>
  <div class="mb-5">
    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name_car</label>
    <input type="text" wire:model="name_car" id="name_car" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
   @error('name_car')                         <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>                     @enderror
   </div>
<div class="mb-5 ml-0">
    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail_car</label>
    <input type="text" wire:model="detail_car" id="detail_car" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @error('detail_car')                         <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>                     @enderror
   </div>

</div>



<div class="container mt-10">
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">฿ Price_car </label>
    <input type="number" wire:model="price_car" id="price_car" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    @error('price_car')                         <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>                     @enderror
   </div>


 <div class="container mt-10">
   {{-- <input  type="file" wire:model="img_car" id="img_car" accept="image/png,image/jpeg"    /> --}}
   {{-- <input type="file" wire:model="image" id="image" accept="image/png,image/jpeg">

    @error('image') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>                     
    @enderror --}}

</div> 

<div class="container mt-5">
   <x-button  wire:click.prevent="insertdatabase" class="px-5">                     {{ __('Save') }}                 </x-button>
</div>
</form>

</div>

    </div>
    </div>
    

   
    
   
<div class="container mt-5">
  <form class="max-w-md mx-auto">   
 
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="text" wire:model.live="search" id="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="      Search Cars" required />
      
    </div>
  </form>
</div>

    <div class="container mt-5">
      <div class="row">
        <div class="col-xs-12">
          <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
           
            <thead >
            <tr >
            
              <th>ID_car</th>
              <th>Name_car</th>
              <th>Detail_car</th>
              <th>Price_car</th>
              {{-- <th>Image_car</th> --}}
              <th>Action</th>
    
              
            </tr>
            </thead>
            <tbody>
            @foreach($item as $object)
            <tr>
                <td>{{$object->id}}</td>
                <td>{{$object->name_car}}</td>
                <td>{{$object->detail_car}}</td>
                <td>{{$object->price_car}} ฿</td>
           
                {{-- <td><img src="{{asset('storage/'.$object->image)}}" width="200px"></td> --}}
                
                <td>
                  <button class="btn btn-warning" wire:click.prevent="addpopup({{$object->id}})" onclick="setid({{$object->id}})">Edit</button> |
                 <button class="btn btn-danger" wire:click.prevent="delete({{$object->id}})" >Delete</button></td>
            
               
    </tr>
                @endforeach
            </tbody>

            

<!-- Modal toggle -->


<!-- Main modal -->
{{-- @if ($swal_id_car === $object->id) --}}
<div id="default-modal" tabindex="-1" aria-hidden="true" class="{{$namepopup ? '':'hidden'}} overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Form Edit
                </h3>
                {{-- <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button> --}}
            </div>
            <!-- Modal body -->
           <div class="container mt-5">
         
           
                {{-- <form> --}}
                  <div class="mb-5" >
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name_car</label>
                    <input type="text" wire:model="swal_name_car" id="swal_name_car" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('swal_name_car')
                      <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-5 ml-0">
                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail_car</label>
                    <input type="text" wire:model="swal_detail_car" id="swal_detail_car" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('swal_detail_car')
                      <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                  </div>


                  <div class="mb-5 ml-0">
                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail_car</label>
                    <input type="number" wire:model="swal_price_car" id="swal_price_car" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('swal_detail_car')
                      <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                  </div>



                  <div class="container mt-10" v-if="uri">  <label for="small-input" class="block mb-2 text-sm">
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
          
                      <button type ="submit" onclick="editerror()" data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Save Edit</button>
                  </div>
          </form>
          
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
            <Script>

              function setid(id2){
                var id=localStorage.setItem('id-user',id2);
                console.log('test',id2)
                console.log(id2)
              }
             
             function editerror(){


              var id_user=localStorage.getItem('id-user');
              console.log(id_user);
             var name = $('#swal_name_car').val();
            var detail = $('#swal_detail_car').val();
            var price = $('#swal_price_car').val();
            $.ajax({
                url: "http://localhost/livewire_api/insertUser.php",
                method: "GET",
                data: {
                    isAdd: true,
                    name_car: name,
                    detail_car: detail,
                    price_car: price,
                    id: id_user
                },
                success: function (response) {
                    console.log(response);
                    // Handle response data here if needed
                },
                error: function (xhr, status, error) {
                    console.error('There was a problem with the AJAX request:', error);
                }
            });
             }
            </Script>

           </div>
           
            <!-- Modal footer -->
           
        </div>
    </div>
</div>

{{-- @endif --}}
        
    </body>
    </html>
    </div>

