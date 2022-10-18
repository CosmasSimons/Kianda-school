<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class = "container" dtyle = "display:flex">
        <div class="car">
            <img src="\img\th (5).jpg" style="width:10%;length:10%;">
            
        </div>
        <div style = "">
        Name:{{Auth::user()->name}}        
        </div>
        <div>
        Email:{{Auth::user()->email}}
        </div>
        <div>
        Gender:{{Auth::user()->gender}}
        </div>
        <div>
        Address:{{Auth::user()->address}}
        </div>
        <div>
        Date of Birth:{{Auth::user()->dob}}
        </div>
        <div>
        Phone:{{Auth::user()->phone}}
        </div>
        <div>
        Faculty:{{Auth::user()->faculty}}
        </div>
        <div>
        Class:{{Auth::user()->classin}}
        </div>
        <div>
        Subjects:
        <select style = ""> 
                                <option> {{Auth::user()->name}} Subjects </option>
                                <option> {{Auth::user()->subject1}} </option>
                                <option> {{Auth::user()->subject2}} </option>
                                <option> {{Auth::user()->subject3}} </option>
                                <option> {{Auth::user()->subject4}} </option>
                                <option> {{Auth::user()->subject5}} </option>
                                <option> {{Auth::user()->subject6}} </option>
                                <option> {{Auth::user()->subject7}} </option>
                                <option> {{Auth::user()->subject8}} </option>
                                <option> {{Auth::user()->subject9}} </option>
                                <option> {{Auth::user()->subject10}} </option>
                            </select>
        </div>

    </div>

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
