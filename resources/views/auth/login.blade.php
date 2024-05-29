<x-layout>
    <div class="font-poppins antialiased text-black flex flex-col md:h-screen">
        <!-- Header -->
        <div class="hidden md:flex flex-row items-center justify-end bg-[#383333] p-4 space-x-4">
            <div class="text-white text-lg font-bold">University of Nueva Caceres</div>
            <!-- LOGO HERE SIZE 50 -->
        </div>

        <!-- Login -->
        <div
            class="flex flex-col md:flex-row bg-gradient-to-b from-[#FFFFFF] from-10 to-[#258245] h-screen items-center justify-center">
            <div class="w-full lg:w-[35%] xl:w-[30%] p-4 mx-auto lg:ml-28 xl:ml-36 ">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="flex items-center justify-center flex-col mb-20">
                        <p class="font-poppins font-semibold text-[40px] text-[#14B56A]">Welcome Back</p>
                        <p class="font-semibold text-gray-400">Login to your account</p>
                    </div>
                    <form action="#" method="POST" class="text-black">
                        <div class="mb-4">
                            <label for="username" class="block font-medium text-gray-400">ID-Number</label>
                            <input type="text" id="username" name="username"
                                class="input input-bordered bg-white w-full border-[#9BB1AF]" />
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block font-medium text-gray-400">Password</label>
                            <input type="password" id="password" name="password"
                                class="input input-bordered bg-white w-full border-[#9BB1AF]" />
                        </div>
                        <div class="flex justify-end mb-4">
                            <input type="checkbox" id="remember" name="remember" class="checkbox checkbox-success" />
                            <label for="remember" class="ml-2 text-gray-700">Remember me</label>
                        </div>
                        <div class="flex flex-row justify-between">
                            <a href="#" class="text-[#12AB63]">Forgot Password?</a>
                            <button type="submit"
                                class="text-white px-6 py-2 rounded-lg cursor-pointer bg-[#12AB63]">Login</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="hidden md:flex w-1/2 p-4 ml-36"> <!-- Hide on small screens -->
                <div class="flex flex-col items-start justify-start h-full">
                    <p class="text-[48px] font-bold">ACCOUNTANCY</p>
                    <p class="text-[48px] font-bold">REVIEW MANAGEMENT</p>
                    <p class="text-[48px] font-bold">SYSTEM</p>
                    <p class="text-black font-italic text-[20px]">excel beyond your dreams</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-[#383333] p-4 text-white">
            <div class="flex flex-col md:flex-row justify-between md:mx-14">
                <div class="flex flex-col md:flex-row space-x-6 items-start md:items-end">
                    <div>
                        <!-- LOGO HERE SIZE 50 -->
                    </div>
                    <div class="flex flex-col mb-2 md:mb-0">
                        <p class="font-semibold text-[14px]">UNIVERSITY OF NUEVA CACERES</p>
                        <p class="font-semibold text-[14px]">J. Hernandez Avenue, Naga City 4400</p>
                    </div>
                    <div class="flex flex-row items-end ml-4 justify-center mb-2 md:mb-0">
                        <p class="font-semibold text-[12px]">09100210141</p>
                        <p class="font-semibold text-[12px]">| 09119823812</p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row space-x-6 ">
                    <div class="flex flex-col mb-2 md:mb-0 pl-6 md:pl-0">
                        <p class="font-semibold text-[14px]">info@unc.edu.ph</p>
                        <p class="font-semibold text-[14px]">admission@unc.edu.ph</p>
                    </div>
                    <div class=" mb-2 md:mb-0">
                        <p>Follow Us</p>
                        <div class="flex flex-row space-x-4">
                            <a class="fab fa-facebook" href="#"></a>
                            <a class="fab fa-twitter" href="#"></a>
                            <a class="fab fa-instagram" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
