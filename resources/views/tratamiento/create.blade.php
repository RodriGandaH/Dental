<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Nuevo tratamiento para ') }} <span>{{$patient->nombre}}</span>
        </h2>
    </x-slot>
    <div class="py-2">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end">
                    <a class='inline-flex items-center px-4 py-2 bg-green-500 border
                                                                        border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-green-400
                                                                        focus:outline-none focus:ring-2 focus:ring-green-700 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                                                        duration-150 mr-3' type=" button"
                        href="{{ route('tratamiento.index', $patient->id) }}" style="
                                                                    height: 34px;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                        </svg></a>
                </div>
                <h2 class="text-center text-gray-900 font-semibold text-xl">Odontograma</h2>

                <div class="container">
                    <!-- primera fila -->
                    <div class="lg:flex lg:flex-row lg:justify-center flex flex-col items-center"
                        id="odontograma-fila-1">

                        <div class="lg:flex lg::flex-row lg:mx-6 flex flex-row ">
                            <div class="text-center">
                                <div class="text-center h-3">18</div>
                                <svg height="50" width="50" id="diente1" value="18">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">17</div>
                                <svg height="50" width="50" id="diente2" value="17">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">16</div>
                                <svg height="50" width="50" id="diente3" value="16">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">15</div>
                                <svg height="50" width="50" id="diente4" value="15">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">14</div>
                                <svg height="50" width="50" id="diente5" value="14">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">13</div>
                                <svg height="50" width="50" id="diente6" value="13">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">12</div>
                                <svg height="50" width="50" id="diente7" value="12">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">11</div>
                                <svg height="50" width="50" id="diente8" value="11">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">21</div>
                                <svg height="50" width="50" id="diente9" value="21">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">22</div>
                                <svg height="50" width="50" id="diente10" value="22">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">23</div>
                                <svg height="50" width="50" id="diente11" value="23">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">24</div>
                                <svg height="50" width="50" id="diente12" value="24">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">25</div>
                                <svg height="50" width="50" id="diente13" value="25">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">26</div>
                                <svg height="50" width="50" id="diente14" value="26">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">27</div>
                                <svg height="50" width="50" id="diente15" value="27">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">28</div>
                                <svg height="50" width="50" id="diente16" value="28">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- segunda fila -->

                    <div class="lg:flex lg:flex-row lg:justify-center flex flex-col items-center"
                        id="odontograma-fila-2">

                        <div class="lg:flex lg::flex-row lg:mx-6 flex flex-row ">
                            <div class="text-center">
                                <div class="text-center h-3">55</div>
                                <svg height="50" width="50" id="diente17" value="55">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">54</div>
                                <svg height="50" width="50" id="diente18" value="54">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">53</div>
                                <svg height="50" width="50" id="diente19" value="53">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">52</div>
                                <svg height="50" width="50" id="diente20" value="52">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">51</div>
                                <svg height="50" width="50" id="diente21" value="51">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>

                        </div>
                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">61</div>
                                <svg height="50" width="50" id="diente22" value="61">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">62</div>
                                <svg height="50" width="50" id="diente23" value="62">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">63</div>
                                <svg height="50" width="50" id="diente24" value="63">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">64</div>
                                <svg height="50" width="50" id="diente25" value="64">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">65</div>
                                <svg height="50" width="50" id="diente26" value="65">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="palatino"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>



                        </div>
                    </div>
                    <!-- tercera fila -->

                    <div class="lg:flex lg:flex-row lg:justify-center flex flex-col items-center"
                        id="odontograma-fila-3">

                        <div class="lg:flex lg::flex-row lg:mx-6 flex flex-row ">
                            <div class="text-center">
                                <div class="text-center h-3">85</div>
                                <svg height="50" width="50" id="diente27" value="85">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">84</div>
                                <svg height="50" width="50" id="diente28" value="84">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">83</div>
                                <svg height="50" width="50" id="diente29" value="83">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">82</div>
                                <svg height="50" width="50" id="diente30" value="82">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">81</div>
                                <svg height="50" width="50" id="diente31" value="81">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>

                        </div>
                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">71</div>
                                <svg height="50" width="50" id="diente32" value="71">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">72</div>
                                <svg height="50" width="50" id="diente33" value="72">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">73</div>
                                <svg height="50" width="50" id="diente34" value="73">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">74</div>
                                <svg height="50" width="50" id="diente35" value="74">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">75</div>
                                <svg height="50" width="50" id="diente36" value="75">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>



                        </div>
                    </div>

                    <!-- cuarta fila -->
                    <div class="lg:flex lg:flex-row lg:justify-center flex flex-col items-center"
                        id="odontograma-fila-4">

                        <div class="lg:flex lg::flex-row lg:mx-6 flex flex-row ">
                            <div class="text-center">
                                <div class="text-center h-3">48</div>
                                <svg height="50" width="50" id="diente37" value="48">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">47</div>
                                <svg height="50" width="50" id="diente38" value="47">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">46</div>
                                <svg height="50" width="50" id="diente39" value="46">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">45</div>
                                <svg height="50" width="50" id="diente40" value="45">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">44</div>
                                <svg height="50" width="50" id="diente41" value="44">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">43</div>
                                <svg height="50" width="50" id="diente42" value="43">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">42</div>
                                <svg height="50" width="50" id="diente43" value="42">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">41</div>
                                <svg height="50" width="50" id="diente44" value="41">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-row mx-6">
                            <div class="text-center">
                                <div class="text-center h-3">31</div>
                                <svg height="50" width="50" id="diente45" value="31">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>

                            </div>
                            <div>
                                <div class="text-center h-3">32</div>
                                <svg height="50" width="50" id="diente46" value="32">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">33</div>
                                <svg height="50" width="50" id="diente47" value="33">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="incisal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">34</div>
                                <svg height="50" width="50" id="diente48" value="34">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">35</div>
                                <svg height="50" width="50" id="diente49" value="35">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">36</div>
                                <svg height="50" width="50" id="diente50" value="36">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">37</div>
                                <svg height="50" width="50" id="diente51" value="37">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                            <div>

                                <div class="text-center h-3">38</div>
                                <svg height="50" width="50" id="diente52" value="38">
                                    <polygon points="10,10 50,10 40,20 20,20" estado="0" value="lingual"
                                        class="diente" />
                                    <polygon points="50,10 50,50 40,40 40,20" estado="0" value="distal"
                                        class="diente" />
                                    <polygon points="50,50 10,50 20,40 40,40" estado="0" value="vestibular"
                                        class="diente" />
                                    <polygon points="10,50 20,40 20,20 10,10" estado="0" value="mesial"
                                        class="diente" />
                                    <polygon points="20,20 40,20 40,40 20,40" estado="0" value="oclusal"
                                        class="diente" />
                                </svg>
                            </div>
                        </div>
                    </div>


                    <form method="POST" class="m-3">
                        <h2 class="text-xl font-semibold text-gray-900 text-center">Datos</h2>
                        <br>
                        {{-- <div class="grid md:grid-cols-2 sm:grid-cols-1  gap-4"> --}}
                            @csrf
                            <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2">
                                <div class="md:col-span-3 sm:col-span-1">
                                    <x-input-label for="diente" :value="__('Dientes')" />
                                    <textarea id="diente" rows="2" name="diente"
                                        class="block mt-1 w-full text-sm text-gray-900   border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{old('diente')}}</textarea>

                                    @error('diente')
                                    <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="md:col-span-4 sm:col-span-1">
                                    <x-input-label for="diagnostico" :value="__('Diagnostico')" />
                                    <textarea id="diagnostico" rows="2" name="diagnostico"
                                        class="block mt-1 w-full text-sm text-gray-900   border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{old('diagnostico')}}</textarea>
                                    @error('diagnostico')
                                    <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="md:col-span-1 sm:col-span-1 flex flex-col items-center">
                                    <x-input-label for="rx" :value="__('Rayos X')" />
                                    <input id="rx" type="checkbox" value="0" name="rx"
                                        class="mt-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 mx-auto"
                                        onchange="handleRxChange(this)" {{ old('rx') ? 'checked' : '' }}>

                                </div>
                                <div class="md:col-span-3 sm:col-span-1">
                                    <x-input-label for="tratamiento" :value="__('Tratamiento')" />
                                    <textarea id="tratamiento" rows="2" name="tratamiento"
                                        class="block mt-1 w-full text-sm text-gray-900   border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{old('tratamiento')}}</textarea>
                                    @error('tratamiento')
                                    <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="md:col-span-1 sm:col-span-1">
                                    <x-input-label for="costo" :value="__('Costo')" />
                                    <x-text-input id="costo" class="block mt-1 w-full" type="number" name="costo"
                                        :value="old('costo')" />
                                    @error('costo')
                                    <span class="text-sm text-red-600 space-y-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid md:grid-cols-12 sm:grid-cols-1 gap-2 mt-4">
                                <div class="md:col-span-3 sm:col-span-1">
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
                                        class="block p-2.5 w-full text-sm text-gray-900   border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                        placeholder="Escribe las observaciones aqui...">{{old('observaciones')}}</textarea>
                                </div>
                                {{-- <div class="md:col-span-1 sm:col-span-1">
                                    <x-input-label for="estado" :value="__('Completado')" />
                                    <input id="estado" type="checkbox" value=""
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 ">

                                </div> --}}

                            </div>
                            <br>


                            <div class="flex justify-between">
                                <x-primary-button class="mt-3 ml-3">
                                    {{ __('Guardar') }}
                                </x-primary-button>
                                <a class='inline-flex items-center px-4 mt-3 py-2 bg-red-600 border
                                    border-gray-300 rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-red-400
                                    focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out
                                    duration-150 mr-3' type=" button"
                                    href="{{ route('tratamiento.index', ['patient' => $patient->id]) }}" style="
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
    let dientesSeleccionados = [];

    dientes.forEach(diente => {
        diente.addEventListener('click', function() {
            this.classList.toggle('seleccionado');
            let svgId = this.closest("svg").id;
            let svgValue = document.getElementById(svgId).getAttribute("value");
            let parte = this.getAttribute('value');

            if (this.classList.contains('seleccionado')) {
                if (!partesSeleccionadas[svgValue]) {
                    partesSeleccionadas[svgValue] = [];
                    }
                partesSeleccionadas[svgValue].push(parte);
                if (!dientesSeleccionados.includes(svgValue)) {
                    dientesSeleccionados.push(svgValue);
                    }
                 } else {
                    partesSeleccionadas[svgValue] = partesSeleccionadas[svgValue].filter(p => p !== parte);
                        if (!partesSeleccionadas[svgValue].length) {
                            delete partesSeleccionadas[svgValue];
                            dientesSeleccionados = dientesSeleccionados.filter(d => d !== svgValue);
                        }
                    }

    let valores = '';
    dientesSeleccionados.forEach(diente => {
        valores += `${diente}:${partesSeleccionadas[diente].join(',')},\n`;
    });
    inputValores.value = valores;
});
});
</script>