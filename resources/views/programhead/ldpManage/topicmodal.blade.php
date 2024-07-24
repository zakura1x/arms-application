<div id="topicModal"
    class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-25 hidden">
    <div class="bg-white rounded-lg shadow-lg max-w-7xl">
        <header class="bg-[#42604C] text-white border-b border-gray-100 rounded-t-lg">
            <div class="p-4 flex items-center">
                <h2 class="font-semibold">Create New Topic</h2>
            </div>
        </header>
        <div class="p-4">
            <form id="topicForm" action="{{ route('ph.topic.store') }}" method="POST">
                @csrf
                {{-- Hidden input type subject --}}
                <input type="hidden" name="subject_id" value="{{ $ldp->subject_id }}">
                <input type="hidden" name="ldp_id" value="{{ $ldp->id }}">
                <label for="topicName"><b>Topic Name</b></label>
                <input name="topic_name" id="topicName" type="text" placeholder="Enter Topic Name" required
                    class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 mb-4 ease-linear transition-all duration-150">
                <div class="flex items-center mb-4">
                    <div class="w-full mr-2">
                        <label for="noHours"><b>No. of Hours</b></label>
                        <input id="noHours" name="no_of_hours" type="number" min=1
                            placeholder="Indicate the number of hours" required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                    <div class="w-full mr-2">
                        <label for="percentage"><b>Percentage</b></label>
                        <input id="percentage" name="percentage" type="number" min=1
                            placeholder="Indicate the number of percentage" required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                    <div class="w-full">
                        <label for="noItems"><b>No. of Items</b></label>
                        <input id="noItems" name="no_of_items" type="number" min=1
                            placeholder="Indicate the number of items" required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                </div>
                <div class="border-2 border-green-700 mt-2 mb-2"></div>
                <a>Please indicate the number of questions under the <b>EASY</b> Level</a>
                <div class="flex items-center">
                    <div class="w-full mr-2">
                        <label for="remembering"><b>Remembering</b></label>
                        <input id="remembering" name="easy_remembering" type="number" min=1 required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                    <div class="w-full">
                        <label for="understanding"><b>Understanding</b></label>
                        <input id="understanding" name="easy_understanding" type="number" min=1 required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                </div>
                <div class="border-2 border-green-700 mt-2 mb-2"></div>
                <a>Please indicate the number of questions under the <b>MODERATE</b> Level</a>
                <div>
                    <label for="applying"><b>Applying</b></label>
                    <input id="applying" type="number" name="moderate_applying" min=1 required
                        class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                </div>
                <div class="border-2 border-green-700 mt-2 mb-2"></div>
                <a>Please indicate the number of questions under the <b>DIFFICULT</b> Level</a>
                <div class="flex items-center">
                    <div class="w-full mr-2">
                        <label for="analyzing"><b>Analyzing</b></label>
                        <input id="analyzing" type="number" min=1 name="difficult_analyzing" required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                    <div class="w-full mr-2">
                        <label for="evaluating"><b>Evaluating</b></label>
                        <input id="evaluating" name="difficult_evaluating" type="number" min=1 required
                            class="bg-[#D0D9D3] border-0 rounded-lg text-l shadow w-full h-12 p-5 ease-linear transition-all duration-150">
                    </div>
                    <div class="w-full">
                        <label for="creating"><b>Creating</b></label>
                        <input id="creating" name="difficult_creating" type="number" min=1 required
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
                            CREATE
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
