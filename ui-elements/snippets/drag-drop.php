<div x-data="{ files: null }" class="flex flex-col flex-grow mb-3 text-center p-12 bg-white rounded-lg">
    <div class="flex items-center mb-6">
        <p class="text-gray-700 text-lg font-medium">Upload Files</p>
        <i class="fa-sharp fa-light fa-regular fa-xmark ml-auto text-lg"></i>
    </div>
    <div class="group block w-full p-16 relative appearance-none bg-white border-2 border-dashed border-gray-200 rounded-lg">
        <input type="file" multiple=""
               class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
               x-on:change="files = $event.target.files;"
               x-on:dragover="$el.parentNode.classList.add('bg-blue-50', 'border-blue-100')"
               x-on:dragleave="$el.parentNode.classList.remove('bg-blue-50', 'border-blue-100')"
               x-on:drop="$el.parentNode.classList.remove('bg-blue-50', 'border-blue-100')" name="file_upload">
        <div class="h-full flex flex-col items-center justify-center">
            <div class="flex flex-col items-center">
                <i class="fa-sharp fa-light fa-regular fa-upload text-lg mb-6"></i>
                <p class="text-gray-700 text-sm font-medium">Drag and drop files here or <span class="underline">choose files</span></p>
            </div>
        </div>
    </div>
    <div class="flex items-center mt-2">
        <span class="text-gray-300 text-xs">Supported formats: PNG, JPEG, GIF</span>
        <span class="text-gray-300 text-xs ml-auto">Maximum Size: 10MB</span>
    </div>

    <div class="w-full bg-white rounded-full h-1.5 mt-4">
        <div class="bg-green-500 h-1.5 rounded-full"
             x-show="files !== null"
             x-transition:enter-start="w-0"
             x-transition:enter-end="w-full"
             x-transition:enter="transition-all duration-500 delay-100 ease-in-out"></div>
    </div>

    <div x-show="files !== null"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:enter="transition-all duration-1000 delay-300 ease-in-out"
         class="mt-4">
        <div>
        <template x-if="files !== null">
                <div x-show="files !== null" class="flex flex-col justify-center">
                    <template x-for="(file, index) in files" :key="index">
                        <div class="w-full relative flex items-center space-x-3" :class="index == 0 ? 'pb-3 mb-3 border-b border-b-gray-100' : ''">
                            <!-- Display the image preview -->
                            <img :src="URL.createObjectURL(file)" alt="Preview" class="w-12 h-12 object-cover rounded">
                            <div class="flex-1 flex items-start">
                                <div class="flex-1 text-left">
                                    <input type="text" class="w-[90%] text-gray-700 text-sm focus:outline-none p-1" :value="file.name">
                                    <p class="text-gray-500 text-sm px-1" x-text="(file.size / 1024 < 1024) ? (file.size / 1024).toFixed(1) + ' KB' : (file.size / (1024 * 1024)).toFixed(1) + ' MB'"></p>
                                </div>
                                <i class="fa-sharp fa-light fa-regular fa-xmark ml-auto text-sm"></i>
                            </div>
                        </div>
                    </template>
                </div>
            </template>
        </div>
    </div>

    <div class="flex items-center justify-end space-x-2 mt-12">
        <button type="button"
           class="inline-block py-2 px-6 rounded bg-white border text-gray-700 font-medium border-gray-100 shadow-sm shadow-gray-100 font-secondary text-sm">Cancel</button>
        <button type="button" href="javascript:void(0)"
            :class="files == null ? 'opacity-25' : ''"
           class="inline-block py-2 px-6 rounded bg-black border text-white font-medium border-gray-100 shadow-sm shadow-gray-100 font-secondary text-sm transition-opacity duration-500">Continue</button>
    </div>
</div>