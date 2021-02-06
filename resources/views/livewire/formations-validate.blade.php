<div>
    <!-- component -->
    <div class="sans-serif bg-gray-200 h-screen">
        <div class="container mx-auto py-6 px-4">
            <h1 class="text-3xl py-4 border-b mb-10">Liste des formations validées par utilisateur</h1>

            <span class="text-gray-700">Utilisateur</span>
            <select wire:model="currentUser" id="Userid" class=" form-select mt-1 block md:w-auto mb-5 ">
                <option></option>
                @forelse($users as $user)
                    <option value="{{ $user->id }}">{{$user->name}}</option>
                @empty

                @endforelse
            </select>


            <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
                 style="height: 405px;">
                <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped ">
                    <thead>
                    <tr class="grid grid-cols-2 gap-4 bg-gray-100">
                        <th class=" border-b border-gray-200 bg-gray-100">
                            <label for="">Titre</label>
                        </th>
                        <th class=" border-b border-gray-200 bg-gray-100">
                            <label for="">Description</label>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($formations != null)
                        @foreach($formations as $formation)
                            @if($formation->formation->statutFormation_id == 1)
                            <tr class="grid text-center grid-cols-2 gap-4">
                                <td>{{ $formation->formation->title }}</td>
                                <td>{{ $formation->formation->description }}</td>
                                <td></td>
                            </tr>
                            @endif
                        @endforeach
                    @else

                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
