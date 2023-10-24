<x-layout.default>
    <div class="mb-5" x-data="{tab: 'empresa'}">
        <!-- buttons -->
        <div>
            <ul class="flex flex-wrap mt-3 mb-5">
                <li>
                    <x-tabs-link href="javascript:" ::class="{'!border-primary text-primary dark:bg-[#191e3a]' : tab === 'empresa'}" @click="tab = 'empresa'">
                        <i class="fa-solid fa-building pr-2"></i>
                        Empresa
                    </x-tabs-link>
                </li>
                <li>
                    <x-tabs-link href="javascript:" ::class="{'!border-primary text-primary dark:bg-[#191e3a]' : tab === 'profile'}" @click="tab = 'profile'">
                        Dominio
                    </x-tabs-link>
                </li>
            </ul>
        </div>

        <!-- description -->
        <div class="flex-1 text-sm ">
            <template x-if="tab === 'empresa'" x-data="{modal-adicionar: 'false'}">
                <div class="py-5">
                    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white  shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">
                                <div class="mb-5 flex items-center justify-between">
                                    <h5 class="text-lg font-semibold dark:text-white-light">Empresas</h5>
                                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                        <button class="btn p-0 rounded-none border-0 shadow-none dropdown-toggle text-black dark:text-white-dark hover:text-primary dark:hover:text-primary" @click="toggle">
                                            <i class="fa-solid fa-grip pr-2"></i>
                                        </button>
                                        <ul  x-cloak x-show="open" x-transition x-transition.duration.300ms class="ltr:right-0 rtl:left-0 bottom-full !mt-0 mb-1 whitespace-nowrap">
                                            <li x-data="modal">
                                                <button href="javascript:;" @click="toggle"><i class="fa-solid fa-plus mr-2"></i>Adicionar</button>
                                            
                                                <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto" :class="open && '!block'">
                                                    <div class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
                                                        <div x-show="open" x-transition x-transition.duration.300 class="panel border-0 p-0 rounded-lg overflow-hidden  w-full max-w-sm my-8">
                                                            <div class="flex bg-[#fbfbfb] dark:bg-[#121c2c] items-center justify-between px-5 py-3">
                                                                <h5 class="font-bold text-lg">Modal Title</h5>
                                                                <button type="button" class="text-white-dark hover:text-dark" @click="toggle">
                                                                </button>
                                                            </div>
                                                            <div class="p-5">
                                                                <div class="dark:text-white-dark/70 text-base font-medium text-[#1f2937]">
                                                                    <p>Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.</p>
                                                                </div>
                                                                <div class="flex justify-end items-center mt-8">
                                                                    <button type="button" class="btn btn-outline-danger" @click="toggle">Discard</button>
                                                                    <button type="button" class="btn btn-primary ltr:ml-4 rtl:mr-4" @click="toggle">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Icone</th>
                                                <th>Dominio</th>
                                                <th>Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tenant as $empresa)
                                            <tr>
                                                <td class="whitespace-nowrap">{{$empresa->name}}</td>
                                                <td>
                                                    @if ($empresa->icone)
                                                    <img class="w-8 ml-[5px] flex-none" src="{{$empresa->icone}}" alt="image" />
                                                    @endif
                                                </td>
                                                <td>{{$empresa->domains[0]->domain}}</td>
                                                <td> <span class="badge whitespace-nowrap" :class="{'bg-primary': data.status === 'Complete', 'bg-secondary': data.status === 'Pending', 'bg-success': data.status === 'In Progress', 'bg-danger': data.status === 'Canceled'}" x-text="data.status"></span></td>
                                                <td class="text-center">
                                                <i class="fa-solid fa-grip pr-2"></i>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <!-- </template> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </template>
            <template x-if="tab === 'profile'">
                <div class="py-5">
                    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900">

                                <div class="flex items-start">
                                    <div class="w-20 h-20 ltr:mr-4 rtl:ml-4 flex-none">
                                        <img src="/assets/images/profile-34.jpeg" alt="image" class="w-20 h-20 m-0 rounded-full ring-2 ring-[#ebedf2] dark:ring-white-dark object-cover" />
                                    </div>
                                    <div class="flex-auto">
                                        <h5 class="text-xl font-medium mb-4">Media heading</h5>
                                        <p class="text-white-dark">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </template>
        </div>
    </div>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("form", () => ({
                tableData: [{
                    id: 1,
                    name: 'John Doe',
                    email: 'johndoe@yahoo.com',
                    date: '10/08/2020',
                    sale: 120,
                    status: 'Complete',
                    register: '5 min ago',
                    progress: '40%',
                    position: 'Developer',
                    office: 'London'
                }]
            }));
        });
    </script>
</x-layout.default>