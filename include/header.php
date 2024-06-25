<div class="header-wrap fixed top-0 left-0 right-0 z-50" x-data="{
	isShrink: false,
	showIsShrink() {
		this.isShrink = this.$el.getBoundingClientRect().top == 0
			&& window.scrollY > 0
	}
}" x-init="showIsShrink()" @scroll.window="showIsShrink()">
	<header class="flex lg:h-auto t-transition xl:px-4" :class="isShrink ? 'py-3 bg-white bg-opacity-40 backdrop-blur-md':'py-3 lg:py-9 xl:py-16'"
		x-data="{ sidemenu: false, toggle() { this.sidemenu = ! this.sidemenu } }">
		<div class="container relative flex items-center justify-between">
			<div class="head-logo shrink-0">
				<a href="#" class="inline-flex">
					<svg class="t-transition max-w-[130px] lg:max-w-[180px] xl:max-w-[202px] h-auto"
						:class="isShrink ? '':'text-white'" width="202" height="45" viewBox="0 0 202 45" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M61.32 11.82V15.18H55.47V33H51.24V15.18H45.42V11.82H61.32ZM79.2785 24.06C79.2785 24.48 79.2285 24.96 79.1285 25.5H66.9485C67.0085 26.98 67.4085 28.07 68.1485 28.77C68.8885 29.47 69.8085 29.82 70.9085 29.82C71.8885 29.82 72.6985 29.58 73.3385 29.1C73.9985 28.62 74.4185 27.97 74.5985 27.15H79.0685C78.8485 28.31 78.3785 29.35 77.6585 30.27C76.9385 31.19 76.0085 31.91 74.8685 32.43C73.7485 32.95 72.4985 33.21 71.1185 33.21C69.4985 33.21 68.0585 32.87 66.7985 32.19C65.5385 31.49 64.5585 30.5 63.8585 29.22C63.1585 27.94 62.8085 26.43 62.8085 24.69C62.8085 22.95 63.1585 21.44 63.8585 20.16C64.5585 18.86 65.5385 17.87 66.7985 17.19C68.0585 16.51 69.4985 16.17 71.1185 16.17C72.7585 16.17 74.1885 16.51 75.4085 17.19C76.6485 17.87 77.5985 18.81 78.2585 20.01C78.9385 21.19 79.2785 22.54 79.2785 24.06ZM75.0185 23.64C75.0785 22.28 74.7185 21.25 73.9385 20.55C73.1785 19.85 72.2385 19.5 71.1185 19.5C69.9785 19.5 69.0185 19.85 68.2385 20.55C67.4585 21.25 67.0285 22.28 66.9485 23.64H75.0185ZM88.7913 16.17C90.1913 16.17 91.3913 16.5 92.3913 17.16C93.3913 17.82 94.1013 18.71 94.5213 19.83V16.38H98.7213V33H94.5213V29.52C94.1013 30.64 93.3913 31.54 92.3913 32.22C91.3913 32.88 90.1913 33.21 88.7913 33.21C87.3913 33.21 86.1313 32.87 85.0113 32.19C83.8913 31.51 83.0113 30.53 82.3713 29.25C81.7513 27.95 81.4413 26.43 81.4413 24.69C81.4413 22.95 81.7513 21.44 82.3713 20.16C83.0113 18.86 83.8913 17.87 85.0113 17.19C86.1313 16.51 87.3913 16.17 88.7913 16.17ZM90.1113 19.86C88.7913 19.86 87.7313 20.29 86.9313 21.15C86.1313 22.01 85.7313 23.19 85.7313 24.69C85.7313 26.19 86.1313 27.37 86.9313 28.23C87.7313 29.07 88.7913 29.49 90.1113 29.49C91.3913 29.49 92.4413 29.06 93.2613 28.2C94.1013 27.32 94.5213 26.15 94.5213 24.69C94.5213 23.21 94.1013 22.04 93.2613 21.18C92.4413 20.3 91.3913 19.86 90.1113 19.86ZM123.705 16.14C125.725 16.14 127.315 16.77 128.475 18.03C129.655 19.27 130.245 21.04 130.245 23.34V33H126.045V23.82C126.045 22.54 125.715 21.56 125.055 20.88C124.415 20.18 123.525 19.83 122.385 19.83C121.205 19.83 120.265 20.2 119.565 20.94C118.865 21.68 118.515 22.76 118.515 24.18V33H114.315V23.82C114.315 22.54 113.985 21.56 113.325 20.88C112.685 20.18 111.795 19.83 110.655 19.83C109.475 19.83 108.535 20.2 107.835 20.94C107.135 21.68 106.785 22.76 106.785 24.18V33H102.555V16.38H106.785V19.53C107.225 18.45 107.915 17.62 108.855 17.04C109.815 16.44 110.925 16.14 112.185 16.14C113.525 16.14 114.685 16.46 115.665 17.1C116.665 17.74 117.415 18.66 117.915 19.86C118.435 18.72 119.205 17.82 120.225 17.16C121.265 16.48 122.425 16.14 123.705 16.14ZM147.101 11.82V15.18H138.191V20.85H145.331V24.09H138.191V33H133.961V11.82H147.101ZM154.187 10.8V33H149.957V10.8H154.187ZM165.694 16.17C167.314 16.17 168.764 16.51 170.044 17.19C171.344 17.87 172.364 18.86 173.104 20.16C173.844 21.44 174.214 22.95 174.214 24.69C174.214 26.43 173.844 27.94 173.104 29.22C172.364 30.5 171.344 31.49 170.044 32.19C168.764 32.87 167.314 33.21 165.694 33.21C164.074 33.21 162.614 32.87 161.314 32.19C160.034 31.49 159.024 30.5 158.284 29.22C157.544 27.94 157.174 26.43 157.174 24.69C157.174 22.95 157.544 21.44 158.284 20.16C159.024 18.86 160.034 17.87 161.314 17.19C162.614 16.51 164.074 16.17 165.694 16.17ZM165.694 19.83C164.514 19.83 163.514 20.25 162.694 21.09C161.874 21.91 161.464 23.11 161.464 24.69C161.464 26.27 161.874 27.48 162.694 28.32C163.514 29.14 164.514 29.55 165.694 29.55C166.874 29.55 167.874 29.14 168.694 28.32C169.514 27.48 169.924 26.27 169.924 24.69C169.924 23.11 169.514 21.91 168.694 21.09C167.874 20.25 166.874 19.83 165.694 19.83ZM200.993 16.38L196.523 33H191.843L188.273 20.91L184.613 33H179.933L175.493 16.38H179.723L182.423 29.22L186.113 16.38H190.583L194.303 29.22L197.033 16.38H200.993Z"
							fill="currentColor" />
						<circle cx="17.5" cy="21.5" r="17.5" fill="#FFCA1D" />
						<path d="M24.3492 12.8088L21.0343 24.7463L9.62107 29.5662L12.936 17.6287L24.3492 12.8088Z" fill="white" />
					</svg>
				</a>
			</div>

			<div class="inline-flex lg:hidden">
				<button @click="toggle" class="p-3" :class="isShrink ? 'text-black':'text-white md:text-black'">
					<svg class="icon w-6 h-6">
						<use xlink:href="#menu-bar-icon"></use>
					</svg>
				</button>
			</div>

			<div
				:class="['fixed', 'lg:static', 'flex', 'lg:flex-row', 'flex-col', 'lg:items-center', 'lg:bg-opacity-0', 'lg:p-0', 'lg:h-auto', 'top-0', 'bottom-0', 'bg-white', 'w-[300px]', 'lg:w-full', 'px-4', 'pt-11', 'pb-4', 'h-screen', 'z-10', 't-transition', sidemenu ? 'right-0' : 'right-[-300px]']">
				<div class="flex lg:hidden py-[19px] px-5 justify-end absolute top-0 left-0 right-0">
					<button @click="toggle">
						<svg class="icon" width="18" height="18">
							<use xlink:href="#close-icon"></use>
						</svg>
					</button>
				</div>
				<div class="menu h-full lg:h-auto overflow-auto lg:overflow-visible lg:ml-auto">
					<ul class="
							flex
							lg:flex-row
							flex-col 
							lg:items-center 
							lg:gap-7 xl:gap-10

							[&>li]:lg:py-[10px]
							[&>li]:text-black
							[&>li]:relative
							[&>li]:lg:inline-flex
							[&>li:not(:first-child)]:lg:border-0
							[&>li:not(:first-child)]:border-t 
							[&>li]:border-grey-100 
							[&>li:hover]:text-primary
	
							[&>li>a]:text-current 
							[&>li>a]:font-semibold
							[&>li>a]:block
							[&>li>a]:leading-none
							[&>li>a]:w-full 
							[&>li>a]:lg:py-2
							[&>li>a]:py-3
							
							[&>li:hover>ul]:lg:block
							[&>li:hover>ul]:lg:h-auto
							[&>li:hover>ul]:lg:overflow-visible"
						:class="{'[&>li]:lg:text-white [&>li>a]:xl:text-lg [&>li>a]:2xl:text-2xl' : !isShrink}"
						x-data="{ menu: 0, sub:0}">
						<li class="gap-[10px] active">
							<a href="#">Product</a>
							<div
								class="grid place-items-center text-current cursor-pointer lg:pointer-events-none lg:static lg:w-auto lg:h-auto absolute top-0 right-0 w-[40px] h-[40px]"
								@click="sub !== 1 ? sub = 1 : sub = null" :class="sub == 1 ? 'active' : ''">
								<svg class="icon t-transition w-[15px] h-[7px]">
									<use xlink:href="#arrow-down-icon"></use>
								</svg>
							</div>
							<ul class=" 
									lg:absolute 
									lg:top-full 
									lg:left-0 
									lg:py-1
									lg:px-0 
									px-2 
									lg:bg-white 
									lg:shadow 
									lg:rounded-xl 
									w-full 
									lg:w-52 
									
									[&>li>a]:leading-none
									[&>li]:text-black 
									[&>li:not(:first-child)]:border-t 
									[&>li]:border-grey-100 
									[&>li:hover]:text-primary
									
									[&>li>a]:text-base 
									[&>li>a]:font-semibold
									[&>li>a]:text-current
									[&>li>a]:block
									[&>li>a]:py-3
									[&>li>a]:px-2
									" x-show="sub == 1" x-collapse>
								<li><a href="#">Audit</a></li>
								<li><a href="#">Manage</a></li>
								<li><a href="#">Secure</a></li>
								<li><a href="#">Automate</a></li>
							</ul>
						</li>
						<li><a href="#">Solution</a></li>
						<li><a href="#">Enterprise</a></li>
						<li><a href="#">Pricing</a></li>
					</ul>
				</div>
				<ul class="flex justify-center items-center gap-7 xl:gap-11 lg:ml-auto">
					<li><a href="#" class="inline-block text-grey-100 font-semibold"
							:class="isShrink ? 'text-base' : 'xl:text-2xl'">Login</a></li>
					<li><a href="#" class="btn btn-sm btn-primary" :class="isShrink ? 'text-base px-6 py-2':''">Sign Up</a></li>
				</ul>
			</div>
			<div
				:class="['fixed', 'top-0', 'left-0', 'right-0', 'bottom-0', 'bg-black', 'bg-opacity-80', 'z-0', 't-transition', 'lg:hidden', sidemenu ? 'opacity-100 visible' : 'opacity-0 invisible']"
				@click="toggle()"></div>
		</div>
	</header>
</div>