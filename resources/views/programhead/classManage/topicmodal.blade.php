<div id="topicModal"
    class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
    <div class="bg-white rounded-lg shadow-lg max-w-7xl">
        <header class="bg-[#42604C] text-white border-b border-gray-100 rounded-t-lg">
            <div class="p-4 flex items-center">
                <h2 class="font-semibold">Create New Topic</h2>
            </div>
        </header>
        <div class="p-4">
            <form id="topicForm" action="{{ route('ph.assessment-store') }}" method="POST">
                @csrf
                {{-- Hidden assessment id --}}
                <input type="hidden" name="assessmentID" value="{{ $assessment->id }}">
                <label for="topicName"><b>Topic Name</b></label>
                <input id="topicName" list="topics" placeholder="Enter Topic Name" name="Topics" required
                    class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                <datalist id="topics">
                    @foreach ($topics as $topic)
                        <option value="{{ $topic->topic_name }}">
                    @endforeach
                </datalist>
                <div class="flex items-center">
                    <div class="w-full mr-2">
                        <label for="moduleName"><b>Module Name</b></label>
                        <input id="moduleName" list="modules" placeholder="Enter Module Name" name="Modules" required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                        <datalist id="modules">
                            @foreach ($modules as $module)
                                <option value="{{ $module->module_name }}">
                            @endforeach
                        </datalist>
                    </div>
                </div>
                <div class="border-2 border-green-700 mt-2 mb-2"></div>
                <a>Please indicate the number of questions under the <b>EASY</b> Level</a>
                <div class="flex items-center">
                    <div class="w-full mr-2">
                        <label for="remembering"><b>Remembering</b></label>
                        <input name="remembering" id="remembering" type="number" min=1 required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                    <div class="w-full">
                        <label for="understanding"><b>Understanding</b></label>
                        <input name="understanding" id="understanding" type="number" min=1 required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                </div>
                <div class="border-2 border-green-700 mt-2 mb-2"></div>
                <a>Please indicate the number of questions under the <b>MODERATE</b> Level</a>
                <div>
                    <label for="applying"><b>Applying</b></label>
                    <input name="applying" id="applying" type="number" min=1 required
                        class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                </div>
                <div class="border-2 border-green-700 mt-2 mb-2"></div>
                <a>Please indicate the number of questions under the <b>DIFFICULT</b> Level</a>
                <div class="flex items-center">
                    <div class="w-full mr-2">
                        <label for="analyzing"><b>Analyzing</b></label>
                        <input name="analyzing" id="analyzing" type="number" min=1 required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                    <div class="w-full mr-2">
                        <label for="evaluating"><b>Evaluating</b></label>
                        <input name="evaluating" id="evaluating" type="number" min=1 required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                    <div class="w-full">
                        <label for="creating"><b>Creating</b></label>
                        <input name="creating" id="creating" type="number" min=1 required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                </div>

                <div class="flex items-center justify-end space-x-6 p-2">
                    <button type="button" id="closeTopicModal"
                        class="close font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                        CANCEL
                    </button>
                    <div id="createButton"
                        class="flex items-center bg-[#42604C] text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.71986 1.72855C2.84248 3.13072 0.859863 6.08382 0.859863 9.49999C0.859863 14.2718 4.72812 18.14 9.49986 18.14C14.2716 18.14 18.1399 14.2718 18.1399 9.49999C18.1399 4.72824 14.2716 0.859985 9.49986 0.859985V11.66"
                                stroke="white" stroke-width="1.2" />
                            <path d="M13.2797 7.88L9.49973 11.66L5.71973 7.88" stroke="white" stroke-width="1.2" />
                        </svg>
                        <button type="submit" class="ml-2">
                            GENERATE
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
