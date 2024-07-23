<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('programhead.css')
</head>

<body class="bg-[#EFF4F6] font-sans antialiased dark:bg-black dark:text-white/50">
  <div id="layout" class="flex">
    @include('programhead.sidebar')

    <!-- Main container -->
    <div id="main-container" class="flex-1 transition-all duration-300 ease-in-out">
      @include('programhead.header')

      <div id="main-content" class="h-screen flex-1 transition-all duration-300 ease-in-out p-4">
        <div class="w-full bg-white border border-gray-300">
          <header class="bg-[#42604C] text-white p-4">
            <h2 class="text-xl font-semibold">Add New Question</h2>
          </header>
          <form id="questionForm" class="p-4">
            <div class="mb-4">
              <label class="block text-gray-700">Attachment (PNG file that contains the questions equation)</label>
              <input type="file" id="attachmentInput" name="attachments[]" class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="flex items-center justify-between">
              <div class="mb-4 w-1/4 mr-2">
                <label class="block text-gray-700">Question Weight</label>
                <input type="number" id="pointInput" min=1 max=15 class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1" required>
              </div>
              <div class="mb-4 w-full mr-2">
                <label for="topicInput" class="block text-gray-700">Topic Covered</label>
                <select id="topicInput" class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1" required>
                  <option value="" selected disabled>Select Topic</option>
                  <option value="Management Advisory Services">Management Advisory Services</option>
                  <option value="Auditing">Auditing</option>
                  <option value="Regulatory Framework for Business">Regulatory Framework for Business</option>
                  <option value="Taxation">Taxation</option>
                  <option value="Financial Accounting and Reporting">Financial Accounting and Reporting</option>
                  <option value="Advanced Financial Accounting and Reporting">Advanced Financial Accounting and Reporting</option>
                </select>
              </div>
              <div class="mb-4 w-full">
                <label fo="moduleInput" class="block text-gray-700">Module Covered</label>
                <input id="moduleInput" list="modules" placeholder="Enter Module Covered" name="Modules" required class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1">
                <datalist id="modules">
                  <option value="M1">
                  <option value="M2">
                </datalist>
              </div>
            </div>
            <div class="flex items-center justify-between">
              <div class="mb-4 w-full mr-2">
                <label class="block text-gray-700">Question Type</label>
                <select id="typeInput" class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1" required>
                  <option value="" selected disabled>Select Type</option>
                  <option value="assessment">Assessment Question</option>
                  <option value="practice">Practice Question</option>
                </select>
              </div>
              <div class="mb-4 w-full mr-2">
                <label class="block text-gray-700">Difficulty</label>
                <select id="difficultyInput" class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1" required>
                  <option value="" selected disabled>Select Difficulty</option>
                  <option value="easy">Easy</option>
                  <option value="medium">Moderate</option>
                  <option value="hard">Difficult</option>
                </select>
              </div>
              <div class="mb-4 w-full">
                <label class="block text-gray-700">Sub-Difficulty</label>
                <select id="subDifficultyInput" class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1" required>
                  <option value="" selected disabled>Select Sub-Difficulty</option>
                  <option value="sub-easy">Remembering</option>
                  <option value="sub-easy">Understanding</option>
                  <option value="sub-moderate">Applying</option>
                  <option value="sub-difficult">Analyzing</option>
                  <option value="sub-difficult">Evaluating</option>
                  <option value="sub-difficult">Creating</option>
                </select>
              </div>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700">Question</label>
              <textarea class="bg-[#D0D9D3] h-20 w-full p-2 border border-gray-300 rounded mt-1" required></textarea>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700">Options</label>
              <div id="optionsContainer">
                <div class="flex items-center mb-2">
                  <input type="checkbox" name="correctAnswers[]" class="form-checkbox mt-2 mr-2" value="0">
                  <input type="text" name="options[]" class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="flex items-center mb-2">
                  <input type="checkbox" name="correctAnswers[]" class="form-checkbox mt-2 mr-2" value="1">
                  <input type="text" name="options[]" class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="flex items-center mb-2">
                  <input type="checkbox" name="correctAnswers[]" class="form-checkbox mt-2 mr-2" value="2">
                  <input type="text" name="options[]" class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
                <div class="flex items-center mb-2">
                  <input type="checkbox" name="correctAnswers[]" class="form-checkbox mt-2 mr-2" value="3">
                  <input type="text" name="options[]" class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1" required>
                </div>
              </div>
              <button type="button" id="addOptionButton" class="bg-[#42604C] text-white p-2 rounded mt-2">Add Option</button>
            </div>

            <div class="flex justify-end">
              <button type="button" id="cancelbtn" class="bg-gray-500 text-white p-2 rounded mr-2">Cancel</button>
              <button id="addButton" class="bg-[#42604C] text-white p-2 rounded">Add Question</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const navButton = document.getElementById('nav-button');
      const sidebar = document.getElementById('sidebar');
      const mainContainer = document.getElementById('main-container');
      const backButton = document.getElementById('cancelbtn');

      const addButton = document.getElementById('addButton');

      const addOptionButton = document.getElementById('addOptionButton');
      const optionsContainer = document.getElementById('optionsContainer');
      const difficultyInput = document.getElementById('difficultyInput');
      const subDifficultyInput = document.getElementById('subDifficultyInput');
      let optionIndex = 4;

      navButton.addEventListener('click', function () {
        sidebar.classList.toggle('show');
        mainContainer.classList.toggle('shifted');
      });

      backButton.addEventListener('click', function () {
        window.location.href = '{{ route('ph.questionbank') }}';
      });

      addButton.addEventListener('click', function () {
        window.alert('Question Saved on Database');
        window.location.href = '{{ route('ph.questionbank') }}';
      });

      addOptionButton.addEventListener('click', function () {
        const newOption = document.createElement('div');
        newOption.classList.add('flex', 'items-center', 'mb-2');
        newOption.innerHTML = `
          <input type="checkbox" name="correctAnswers[]" class="form-checkbox mt-2  mr-2" value="${optionIndex}">
          <input type="text" name="options[]" class="bg-[#D0D9D3] w-full p-2 border border-gray-300 rounded mt-1" required>
        `;
        optionsContainer.appendChild(newOption);
        optionIndex++;
      });

      const subDifficultyOptions = {
        easy: [
          { value: "sub-easy", text: "Remembering" },
          { value: "sub-easy", text: "Understanding" },
        ],
        medium: [
          { value: "sub-moderate", text: "Applying" },
        ],
        hard: [
          { value: "sub-difficult", text: "Analyzing" },
          { value: "sub-difficult", text: "Evaluating" },
          { value: "sub-difficult", text: "Creating" },
        ]
      };

      difficultyInput.addEventListener('change', function () {
        const selectedDifficulty = difficultyInput.value;
        // Clear the sub-difficulty options
        subDifficultyInput.innerHTML = '<option value="" selected disabled>Select Sub-Difficulty</option>';

        // Populate the sub-difficulty options based on the selected difficulty
        if (subDifficultyOptions[selectedDifficulty]) {
          subDifficultyOptions[selectedDifficulty].forEach(function (option) {
            const newOption = document.createElement('option');
            newOption.value = option.value;
            newOption.text = option.text;
            subDifficultyInput.appendChild(newOption);
          });
        }
      });
    });
  </script>
</body>

</html>
