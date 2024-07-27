<body class="bg-gradient-to-tr from-sky-300 via-white to-slate-400 bg-opacity-40 w-full h-screen flex">
<div class="container m-auto">
	<div
		class="sm:max-w-lg min-h-[350px] border border-solid border-sky-400 bg-sky-400 sm:m-auto mx-10 sm:p-20 p-10 rounded-tr-3xl rounded-b-3xl bg-opacity-50 relative">
		<div class="absolute w-5 h-5 rounded-full bg-white top-[5px] left-[5px]"></div>
		<div
			class="font-[inter] font-bold sm:text-2xl min-[475px]:text-xl text-base text-center text-slate-700 bg-gradient-to-t from-sky-500 to-green-500 bg-clip-text text-transparent">
			Sistem Pengaduan Masyarakat</div>
		<hr class="my-2">
		<form action="" method="post">
			<div
				class="flex-none sm:px-8 sm:py-5 p-3 rounded-2xl backdrop-blur-md bg-slate-200/40 mb-2 shadow-md shadow-slate-400">
				<label for="username" class="font-semibold text-slate-600 sm:text-lg">Username</label>
				<input type="text" name="username" id="username" placeholder="Username..."
					class="block w-full pl-1 mt-2 h-8 border border-slate-300 focus:outline-none focus:border-sky-500 rounded-md shadow-md shadow-slate-400 font-sans font-semibold text-slate-700">
				<span class="mb-2 block text-sm font-semibold text-pink-500"><?= form_error('username') ?></span>
				<label for="password" class="font-semibold text-slate-600 sm:text-lg">Password</label>
				<input type="password" name="password" id="password" placeholder="Password..."
				class="block w-full pl-1 mt-2 mb-2 h-8 border border-slate-300 focus:outline-none focus:border-sky-500 rounded-md shadow-md shadow-slate-400 font-sans font-semibold text-slate-700">
				<span class="mb-2 block text-sm font-semibold text-pink-500"><?= form_error('password') ?></span>
			</div>
			<button type="submit"
				class="py-1 px-3 absolute bottom-5 right-8 bg-sky-500 rounded-lg active:bg-sky-800 hover:bg-sky-600 hover:delay-300 transition-all font-semibold font-sans text-slate-100 shadow-md shadow-slate-400 active:text-white" name="submit">Login</button>
		</form>
	</div>
	<div class="mt-5 text-center font-[opensans] text-slate-500 font-semibold min-[475xpx]:text-base">Belum Punya akun?
		<a href="<?= base_url('Users/registrasi') ?>" class="hover:text-sky-400">Registrasi Sekarang</a></div>
</div>
</body>