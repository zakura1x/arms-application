<!-- Navbar -->
<div class="navbar mx-50 bg-custom1 transition-all duration-300 ease-in-out w-[100%]">
  <div class="flex-1">
      <b><a class="text-xl">ARMS - Program Head's Workspace</a></b>
  </div>
  <div class="flex-none gap-2">
      <div class="form-control">
          <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
      </div>
      <div class="dropdown dropdown-end">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                  <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
              </div>
          </div>
          <ul tabindex="0"
              class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
              <li>
                  <a class="justify-between">
                      Profile
                      <span class="badge">New</span>
                  </a>
              </li>
              <li><a href="{{ route('login') }}">Logout</a></li>
          </ul>
      </div>
  </div>
</div>
