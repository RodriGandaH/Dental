<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Nuevo tratamiento para ') }} <span>{{$patient->nombre}}</span>
        </h2>
    </x-slot>
    <div class="py-2">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-center text-xl font-bold">Odontograma</h2>

                <div class="container">
                    <!-- primera fila -->
                    <div class="md:flex md:flex-row md:justify-center" id="odontograma-fila-1">

                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">18</div>
                                <svg height="50" width="50" id="diente1" value="diente 1">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">17</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">16</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">15</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">14</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">13</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">12</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">11</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">21</div>
                                <svg height="50" width="50" id="diente1" value="diente 1">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">22</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">23</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">24</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">25</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">26</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">27</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">28</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- segunda fila -->

                    <div class="md:flex md:flex-row justify-center" id="odontograma-fila-2">

                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">55</div>
                                <svg height="50" width="50" id="diente1" value="diente 1">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">54</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">53</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">52</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">51</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>

                        </div>
                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">61</div>
                                <svg height="50" width="50" id="diente1" value="diente 1">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">62</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">63</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">64</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">65</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>



                        </div>
                    </div>
                    <!-- tercera fila -->

                    <div class="md:flex md:flex-row justify-center" id="odontograma-fila-2">

                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">85</div>
                                <svg height="50" width="50" id="diente1" value="diente 1">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">84</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">83</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">82</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">81</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>

                        </div>
                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">71</div>
                                <svg height="50" width="50" id="diente1" value="diente 1">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">72</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">73</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">74</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">75</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>



                        </div>
                    </div>

                    <!-- cuarta fila -->
                    <div class="md:flex md:flex-row md:justify-center" id="odontograma-fila-1">

                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">48</div>
                                <svg height="50" width="50" id="diente1" value="diente 1">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">47</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">46</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">45</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">44</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">43</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">42</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">41</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">31</div>
                                <svg height="50" width="50" id="diente1" value="diente 1">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">32</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">33</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">34</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">35</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">36</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">37</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">38</div>
                                <svg height="50" width="50" id="diente2" value="diente 2">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="1" class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="2" class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="3" class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="4" class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="5" class="diente" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <form action="" method="POST">
                        <h2 class="text-xl font-bold">Datos</h2>
                        <br>
                        {{-- <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4"> --}}
                            @csrf
                            <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                                <div class="md:col-span-4 sm:col-span-1">
                                    <x-input-label for="diente" :value="__('Dientes')" />
                                    <x-text-input id="diente" class="block mt-1 w-full" type="text" name="diente"
                                        :value="old('diente')" />
                                    @error('diente')
                                    <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="md:col-span-2 sm:col-span-1">
                                    <x-input-label for="diagnostico" :value="__('Diagnostico')" />
                                    <x-text-input id="diagnostico" class="block mt-1 w-full" type="text"
                                        name="diagnostico" :value="old('diagnostico')" />
                                    @error('diagnostico')
                                    <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="md:col-span-1 sm:col-span-1">
                                    <x-input-label for="rx" :value="__('Rayos X')" />
                                    <input id="rx" type="checkbox" value="0" name="rx"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mx-auto"
                                        onchange="handleRxChange(this)">

                                </div>
                                <div class="md:col-span-2 sm:col-span-1">
                                    <x-input-label for="tratamiento" :value="__('Tratamiento')" />
                                    <x-text-input id="tratamiento" class="block mt-1 w-full" type="text"
                                        name="tratamiento" :value="old('tratamiento')" />
                                    @error('tratamiento')
                                    <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="md:col-span-2 sm:col-span-1">
                                    <x-input-label for="costo" :value="__('Costo')" />
                                    <x-text-input id="costo" class="block mt-1 w-full" type="number" name="costo"
                                        :value="old('costo')" />
                                    @error('costo')
                                    <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                                <div class="md:col-span-2 sm:col-span-1">
                                    <x-input-label for="fecha_inicio" :value="__('Fecha inicio')" />
                                    <x-text-input id="fecha_inicio" class="block mt-1 w-full" type="date"
                                        name="fecha_inicio" :value="old('fecha_inicio')" />
                                    @error('fecha_inicio')
                                    <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- <div class="md:col-span-2 sm:col-span-1">
                                    <x-input-label for="fecha_fin" :value="__('Fecha fin')" />
                                    <x-text-input id="fecha_fin" class="block mt-1 w-full" type="date" name="fecha_fin"
                                        :value="old('fecha_fin')" />

                                </div> --}}

                                <div class="md:col-span-6 sm:col-span-1">

                                    <x-input-label for="observaciones" :value="__('Observaciones')" />
                                    <textarea id="observaciones" rows="4" name="observaciones"
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Escribe las observaciones aqui..."></textarea>
                                </div>
                                {{-- <div class="md:col-span-1 sm:col-span-1">
                                    <x-input-label for="estado" :value="__('Completado')" />
                                    <input id="estado" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">

                                </div> --}}

                            </div>

                            <div class="flex justify-between">
                                <x-primary-button class="mt-3 ml-3">
                                    {{ __('Guardar Paciente') }}
                                </x-primary-button>
                                <a class='inline-flex items-center px-4 mt-3 py-2 bg-red-600 border
        border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-red-400
        focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
        duration-150 mr-3' type=" button" href="{{ route('tratamiento.index', ['patient' => $patient->id]) }}" style="
    height: 34px;">
                                    Cancelar</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
</x-app-layout>

{{-- Codigo javascript --}}

<script>
    function handleRxChange(checkbox) {
        const rxValue = document.getElementById("rx");
        rxValue.value = checkbox.checked ? "1" : "0";
    }
</script>
<script>
    const dientes = document.querySelectorAll('.diente');
const inputValores = document.querySelector('#diente');
let partesSeleccionadas = {};

dientes.forEach(diente => {
  diente.addEventListener('click', function() {
    this.classList.toggle('seleccionado');
    const input = document.getElementById('diente');
    let svgId = this.closest("svg").id;
    let svgValue = document.getElementById(svgId).getAttribute("value");
    let parte = this.getAttribute('value');

    if (this.classList.contains('seleccionado')) {
      if (!partesSeleccionadas[svgValue]) {
        partesSeleccionadas[svgValue] = [];
      }
      partesSeleccionadas[svgValue].push(parte);
    } else {
      partesSeleccionadas[svgValue] = partesSeleccionadas[svgValue].filter(p => p !== parte);
    }

    let valores = '';
    for (let diente in partesSeleccionadas) {
      if (partesSeleccionadas[diente].length) {
        valores += `${diente}:${partesSeleccionadas[diente].join(',')},`;
      }
    }
    input.value = valores;
  });
});

</script>