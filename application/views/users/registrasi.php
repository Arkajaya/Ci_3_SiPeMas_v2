<body class="bg-gradient-to-tr from-sky-300 via-white to-slate-400 bg-opacity-40 w-full h-auto">
	<div class="container mt-12">
		<div class="flex ml-8 items-start">
			<a href="<?= base_url('users') ?>"
				class="bg-green-400 flex mb-2 pr-1 ring-1 ring-slate-500 text-slate-600 text-sm font-semibold rounded-md hover:bg-green-600">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
					stroke="currentColor" class="size-4 mt-0.5">
					<path stroke-linecap="round" stroke-linejoin="round"
						d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
				</svg>
				Kembali
			</a>
		</div>
		<div class="mx-5 border border-solid bg-white rounded-lg px-3 font-[inter]">
			<h1 class=" text-center mt-5 font-semibold text-slate-600">Form Registrasi Akun</h1>
			<hr class="my-3 w-[80%] m-auto">
			<form action="" method="post">
				<label class="block px-2">
					<span class="block text-xs font-semibold text-slate-400">NIK</span>
					<input type="number"
						class="peer w-full h-7 border border-slate-300 focus:outline-none focus:border-sky-500 rounded-md"
						name="nik" />
					<p class="mt-1 invisible peer-invalid:visible text-pink-600 text-xs">
						NIK hanya harus diisi.
					</p>
				</label>
				<label class="block px-2">
					<span class="block text-xs font-semibold text-slate-400">Nama Lengkap</span>
					<input type="text"
						class="peer w-full h-6 border border-slate-300 focus:outline-none focus:border-sky-500 hover:right-2 hover:ring-sky-400 rounded-md"
						name="nama" />
					<p class="mt-1 invisible peer-invalid:visible text-pink-600 text-xs">
						Nama lengkap harus diisi.
					</p>
				</label>
				<label class="block px-2">
					<span class="block text-xs font-semibold text-slate-400">Alamat</span>
					<input type="text"
						class="peer w-full h-7 border border-slate-300 focus:outline-none focus:border-sky-500 rounded-md"
						name="alamat" />
					<p class="mt-1 invisible peer-invalid:visible text-pink-600 text-xs">
						Please provide a valid email address.
					</p>
				</label>
				<label class="block px-2">
					<span class="block text-xs font-semibold text-slate-400">Nomor Hp/Telepon</span>
					<input type="number"
						class="peer w-full h-7 border border-slate-300 focus:outline-none focus:border-sky-500 rounded-md"
						name="no_hp" />
					<p class="mt-1 invisible peer-invalid:visible text-pink-600 text-xs">
						Please provide a valid email address.
					</p>
				</label>
				<hr class="mb-2 w-[80%] m-auto">
				<label class="block px-2">
					<span class="block text-xs font-semibold text-slate-400">Username</span>
					<input type="text"
						class="peer w-full h-7 border border-slate-300 focus:outline-none focus:border-sky-500 rounded-md"
						name="username" />
					<p class="mt-1 invisible peer-invalid:visible text-pink-600 text-xs">
						Please provide a valid email address.
					</p>
				</label>
				<label class="block px-2">
					<span class="block text-sm font-semibold text-slate-400">Password</span>
					<input type="password"
						class="peer w-full h-7 border border-slate-300 focus:outline-none focus:border-sky-500 rounded-md"
						name="password" />
					<p class="mt-2 invisible peer-invalid:visible text-pink-600 text-xs">
						Please provide a valid email address.
					</p>
				</label>
				<hr class="mb-2 w-[80%] m-auto">
				<button type="submit" class="px-1 py-0.5 mb-2 w-full bg-gradient-to-r from-sky-400 to-blue-600 rounded-md border hover:bg-blue-700 active:bg-blue-800 border-r-slate-400 font-sans font-bold text-center text-slate-100">Daftar</button>
			</form>
		</div>
	</div>
