
<body class="bg-gradient-to-tr from-sky-300 via-white to-slate-400 bg-opacity-40 w-full h-screen border">
	<div class="container relative">
		<h1 class="mx-10 mt-16 text-xl font-bold text-slate-700 font-[inter]">Selamat Datang di Aplikasi Pengaduan
			Masyarakat <span
				class="bg-gradient-to-r from-sky-500 to-green-500 bg-clip-text text-transparent">SiPeMas</span></h1>
		<p class="mx-10 mt-4 text-sm font-[inter] text-slate-500 text-justify">
			Aplikasi ini dibuat untuk memberikan platform yang mudah dan cepat bagi masyarakat dalam menyampaikan
			keluhan, saran, dan masukan terkait pelayanan publik. Tujuannya adalah untuk meningkatkan transparansi,
			akuntabilitas, dan responsivitas pemerintah dalam menangani setiap pengaduan yang masuk, Sesuai dengan
			slogan kami <span class="font-semibold">Transparansi,Efisiensi dan Partisipasi</span> Masyarakat
		</p>

		<div x-data="{ isOpen: false }" class="relative flex">
			<div class="flex justify-center items-center w-full">
			<button type="button" @click="isOpen = !isOpen"
				class="my-5  p-1 bg-gradient-to-tr from-sky-500 to-green-500 rounded-lg relative shadow-md shadow-sky-500 hover:scale-110 trasiti duration-500 mr-2">
				<div
					class="absolute w-3 h-3 rounded-full bg-red-500 -top-[6px] -right-[6px] animate-[ping_2s_cubic-bezier(0,0,0.2,1)_infinite]">
				</div>
				<h1 class="font-[inter] text-slate-200">Ajukan Aduan Anda</h1>
			</button>
			<a class="w-9 h-9 bg-gradient-to-tr from-red-600 to-orange-600 rounded-lg hover:bg-red-700 active:bg-red-800 flex shadow-md shadow-red-400"
			href="">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
				stroke="currentColor" class="size-6 m-auto text-slate-100">
				<path stroke-linecap="round" stroke-linejoin="round"
					d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
				</svg>
			</a>
			</div>
			<!-- modal -->
			<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
				<div x-show="isOpen" x-transition:enter="transition ease-out duration-300"
					x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
					x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
					x-transition:leave-end="opacity-0">
					<div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

					<div class="fixed inset-0 z-10 w-screen overflow-y-auto ">
						<div class="flex min-h-full items-center justify-start p-4 text-center sm:items-center sm:p-0">
							<div x-show="isOpen" x-transition:enter="transition ease-out duration-300"
								x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
								x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
								x-transition:leave="transition ease-in duration-200"
								x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
								x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
								class="m-auto">
								<div
									class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-6xl">
									<div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
										<!-- isi -->
										<div class=" sm:items-start">
											<form action="" method="post" type="multipart/data">
												<label for="isi_aduan"
													class="block font-[inter] text-xl text-slate-600 font-semibold after:content-['*'] after:text-red-600 after:ml-0.5">Masukan
													Aduan anda</label>
												<textarea rows="8" cols="34"
													placeholder="''Masukan aduan anda secara rinci, karena akan menjadi pertimbangan aduan di proses atau tidaknya''"
													class="mt-2 p-1 font-medium block border border-slate-400 focus:outline-none focus:border-sky-400 rounded-lg font-[inter] md:cols-90 "></textarea>
												<label for="foto"
													class="my-4 block font-[inter] text-slate-600 font-semibold">Bukti
													Foto (Opsional sebagai pendukung)</label>
												<input type="file" name="foto" id="foto" class=" file:mr-4 file:py-2 file:px-4
												file:rounded-full file:border-0
												file:text-sm file:font-semibold
												file:bg-violet-50 file:text-indigo-600
												hover:file:bg-violet-100">
											</form>
										</div>
										<!-- --------- -->
									</div>
									<div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
										<button type="button"
											class="inline-flex w-full justify-center rounded-md bg-sky-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-sky-600 sm:ml-3 sm:w-auto">Adukan</button>
										<button type="button"
											class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
											@click="isOpen = !isOpen">Batal</button>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			
		</div>
		<div class="mx-10">
			<span class="font-bold font-[inter]">Mengapa <span
					class="bg-gradient-to-r from-sky-500 to-green-500 bg-clip-text text-transparent">SiPeMas</span>
				?</span><br>
			<div class="mt-2 grid grid-cols-4 grid-rows-4 w-full h-52 gap-1">
				<div
					class="col-span-2 row-span-2 col-start-1 row-start-1 px-1 py-4 text-xs font-semibold text-slate-700 text-center rounded-xl backdrop-blur-xl bg-slate-500/30 hover:scale-110 group transition-all duration-500">
					<span class="group-hover:text-slate-100">Transparansi</span> <br> Memastikan pengaduan ditangani
					dengan jelas.</div>
				<div
					class="col-span-2 row-span-2 col-start-3 row-start-1 px-1 py-4 text-xs font-semibold text-slate-700 text-center rounded-xl backdrop-blur-xl bg-slate-500/30 hover:scale-110 group transition-all duration-500">
					<span class="group-hover:text-slate-100">Akses Mudah</span> <br> Sampaikan pengaduan kapan saja, di
					mana saja.</div>
				<div
					class="col-span-2 row-span-2 col-start-1 row-start-3 px-1 py-4 text-xs font-semibold text-slate-700 text-center rounded-xl backdrop-blur-xl bg-slate-500/30 hover:scale-110 group transition-all duration-500">
					<span class="group-hover:text-slate-100">Efisiensi</span> <br> Menangani pengaduan dengan cepat.
				</div>
				<div
					class="col-span-2 row-span-2 col-start-3 row-start-3 px-1 py-4 text-xs font-semibold text-slate-700 text-center rounded-xl backdrop-blur-xl bg-slate-500/30 hover:scale-110 group transition-all duration-500">
					<span class="group-hover:text-slate-100">Partisipasi</span> <br> Kontribusi Anda sangat penting
					bagi
					perbaikan layanan.</div>
			</div>
		</div>
	</div>

	<!-- fixed -->
	<div
		class="group/profil w-10 h-10 bg-slate-500 rounded-full top-4 left-2 hover:scale-110 transition-all duration-700  fixed">
		<div class="bg-[url('../../../assets/img/1.svg')] w-full h-full bg-cover bg-centertransition-all duration-500">
		</div>
		<div
			class="absolute font-bold text-white group-hover/profil:visible invisible top-[10px] group-hover/profil:translate-x-10 border hover:bg-slate-600 rounded-md group/show cursor-pointer">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
				class="size-4 text-slate-600 font-bold hover:text-white active:text-black">
				<path fill-rule="evenodd"
					d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
					clip-rule="evenodd" />
				<path fill-rule="evenodd"
					d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
					clip-rule="evenodd" />
			</svg>
			<div class="absolute group-hover/show:visible invisible left-2 top-0 z-10 mt-2 w-44 origin-top-right rounded-md bg-white bg-opacity-80 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
				role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
				<!-- Active: "bg-gray-100", Not Active: "" -->
				<a href="#" class="block mx-1 px-4 py-2 text-sm text-gray-700 rounded-md hover:bg-slate-400"
					role="menuitem" tabindex="-1" id="user-menu-item-0">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="size-4 inline mb-1">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
					</svg>
					Your Profile</a>
				<a href="#" class="block mx-1 px-4 py-2 text-sm text-gray-700 rounded-md hover:bg-slate-400"
					role="menuitem" tabindex="-1" id="user-menu-item-2">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="size-4 mb-1 inline">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
					</svg>
					Logout</a>
			</div>
		</div>
	</div>

	<!-- footer -->

