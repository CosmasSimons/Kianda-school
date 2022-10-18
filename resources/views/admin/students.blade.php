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
                    List of all enrolled Students page <br>

                    <table class="" style = "border:1px solid black;width:100%">
                        <tr >
                            
                            <td style = "border:1px solid black">Name</td>
                            <td style = "border:1px solid black">Email</td>
                            <td style = "border:1px solid black">Phone</td>
                            <td style = "border:1px solid black">Gender</td>
                            <td style = "border:1px solid black">Date of Birth</td>
                            <td style = "border:1px solid black">Faculty</td>
                            <td style = "border:1px solid black">class</td>
                            <td style = "border:1px solid black">Parent Details</td>
                            <td style = "border:1px solid black">Subjects</td>
                            <td style = "border:1px solid black">Actions</td>
                        </tr>
                        @foreach($users as $user)

                        <tr>
                            
                            <td style = "border:1px solid black">{{$user['name']}}</td>
                            <td style = "border:1px solid black">{{$user['email']}}</td>
                            <td style = "border:1px solid black">
                            {{$user['phone']}}
                            </td>
                            <td style = "border:1px solid black">{{$user['gender']}}</td>
                            <td style = "border:1px solid black">{{$user['dob']}}</td>
                                                     
                            <td style = "border:1px solid black">
                            {{$user['faculty']}}
                            </td>
                            <td style = "border:1px solid black">
                            {{$user['classin']}}
                            </td>
                            <td style = "border:1px solid black">
                            <select style = "width:100%"> 
                                <option> {{$user['name']}} Parents Details </option>
                                <option> {{$user['parent_name']}} </option>
                                <option> {{$user['parent_phone']}} </option>
                                <option> {{$user['parent_email']}} </option>
                                
                            </select>
                            
                            </td>
                            <td style = "border:1px solid black">
                            <select style = "width:100%"> 
                                <option> {{$user['name']}} Subjects </option>
                                <option> {{$user['subject1']}} </option>
                                <option> {{$user['subject2']}} </option>
                                <option> {{$user['subject3']}} </option>
                                <option> {{$user['subject4']}} </option>
                                <option> {{$user['subject5']}} </option>
                                <option> {{$user['subject6']}} </option>
                                <option> {{$user['subject7']}} </option>
                                <option> {{$user['subject8']}} </option>
                                <option> {{$user['subject9']}} </option>
                                <option> {{$user['subject10']}} </option>
                            </select>
                            </td>
                            <td style = "border:1px solid black">
                            
                            </td>
                        </tr>

                        @endforeach
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
