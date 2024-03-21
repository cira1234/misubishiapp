<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div>
   
   
<div class="container mt-20">
    <form class="max-w-md mx-auto">   
     
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" wire:model.live="search" id="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="      Search Users" required />
          
        </div>
      </form>
</div>
    
        <div class="container mt-20">
          <div class="row">
            <div class="col-xs-12">
              <table summary="This table shows how to create responsive tables using Datatables' extended functionality" class="table table-bordered table-hover dt-responsive">
               
                <thead >
                <tr >
                  <th>ID_User</th>
                  <th>Name_User</th>
                  <th>Email_User</th>
                  <th>Status_User</th>
                  {{-- <th>Image_car</th> --}}
                  <th>Action</th>
        
                  
                </tr>
                </thead>
                <tbody>
                @foreach($item as $object)
                <tr>
                    <td>{{$object->id}}</td>
                    <td>{{$object->name}}</td>
                    <td>{{$object->email}}</td>
                    <td>
                      @if($object->status === "0")
                      <h6>Online</h6>
                      @elseif($object->status === "1")
                      <h6>Online</h6>
                    @elseif($object->status === "2")
                    <h6>ฺBan</h6>
                @endif
                    </td>
                    {{-- <td><img src="{{asset('storage/'.$object->image)}}" width="200px"></td> --}}
                    
                    <td>
                      <button class="btn btn-warning" wire:click.prevent="addpopup({{$object->id}})" onclick="setid({{$object->id}})">Ban</button> |
                     <button class="btn btn-danger" wire:click.prevent="delete({{$object->id}})">Delete</button></td>
        
                   
        </tr>
                    @endforeach
                </tbody>

                <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
                <script>
                   function setid(id2){
                var id=localStorage.setItem('id-user',id2);
                console.log('test',id2)
                console.log(id2)
                editerror()
              }
             
             function editerror(){


              var id_user=localStorage.getItem('id-user');
              console.log(id_user);
             
            var status2="2";
            $.ajax({
                url: "http://localhost/livewire_api/updateuser.php",
                method: "GET",
                data: {
                    isAdd: true,
                    status: status2,
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
                </script>
</div>