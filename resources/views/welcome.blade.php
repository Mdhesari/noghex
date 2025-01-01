<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Nimkat Agency</title>

    <!-- Open Graph Meta Tags (for social media sharing) -->
    <meta property="og:title" caontent="Nimkat | Digital Services Agency" />
    <meta
      property="og:description"
      content="Your Partner in Digital Excellence. Offering Software Development, Web Design, Product Design, and Marketing Services."
    />
    <meta property="og:image" content="assets/favicons/favicon-32x32.png" />
    <meta property="og:url" content="https://nimkat.agency" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="nimkat" />
    <meta name="twitter:title" content="Nimkat | Digital Services Agency" />
    <meta
      name="twitter:description"
      content="Your Partner in Digital Excellence. Offering Software Development, Web Design, Product Design, and Marketing Services."
    />
    <meta
      name="twitter:image"
      content="assets/favicons/android-chrome-512x512.png"
    />

    <!-- SEO Meta Tags -->
    <meta
      name="keywords"
      content="Nimkat, digital services, software development, web design, product design, marketing"
    />
    <meta name="author" content="Nimkat Team" />

    <link rel="canonical" href="https://nimkat.agency" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />

    <!-- Favicon for various devices -->
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/favicons/favicon-16x16.png"
    />
    <!-- For Safari on macOS -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/favicons/apple-touch-icon.png"
    />
    <!-- For Android -->
    <link rel="manifest" href="assets/favicons/site.webmanifest" />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="assets/favicons/android-chrome-192x192.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="512x512"
      href="assets/favicons/android-chrome-512x512.png"
    />

    <script
      defer
      src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"
    ></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          fontFamily: {
            sans: ["Plus Jakarta Sans"],
          },
        },
      };
    </script>

    <style>
      html {
        scroll-behavior: smooth;
      }

      form .focus label {
        opacity: 1 !important;
      }

      form .error {
        border-color: #b71c1c;
        color: #b71c1c;
      }

      form .error::placeholder {
        color: #b71c1c !important;
      }

      #mobile-menu.open {
        left: 0;
      }

      .nimkat-toast-active {
        left: 0 !important;
      }

      .nimkat-service-active {
        background-color: rgba(255, 255, 255, 0.87);
        color: rgba(0, 0, 0, 0.87) !important;
      }

      .nimkat-service-icon {
        fill: rgba(217, 217, 217, 0.1);
        box-shadow: -4px 4px 8px 0px rgba(255, 255, 255, 0.1) inset,
          4px -50px 25px 0px rgba(165, 165, 165, 0.1) inset;
        backdrop-filter: blur(0.5px);
      }

      .nimkat-header {
        /* position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        bottom: 0;
        right: 0;
        left: 0;
        z-index: 40;
        top: 0; */
        z-index: 9999;
        background: rgba(0, 0, 0, 0.12);
        -webkit-backdrop-filter: blur(84px);
        backdrop-filter: blur(84px);
      }

      .nimkat-title {
        background: linear-gradient(
          90deg,
          rgba(255, 255, 255, 0.87) 0.01%,
          rgba(255, 255, 255, 0.52) 98.94%
        );
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .nimkat-scroll-animate {
        animation-name: scroll;
        animation-duration: 2.2s;
        animation-timing-function: cubic-bezier(0.15, 0.41, 0.69, 0.94);
        animation-iteration-count: infinite;
      }

      @keyframes scroll {
        0% {
          opacity: 0;
        }

        10% {
          transform: translateY(-5px);
          opacity: 1;
        }

        100% {
          transform: translateY(0);
          opacity: 0;
        }
      }

      .nimkat-section-title {
        padding-bottom: 1rem;
        background: linear-gradient(
          90deg,
          rgba(255, 255, 255, 0.65) 0%,
          #fff 96.95%
        );
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      #blog h2 > a:after {
        content: "";
        position: absolute;
        inset: 0;
      }
    </style>
  </head>
  <body class="bg-[#0B0D0F]">
    <header class="nimkat-header w-[100%]">
      <!-- Navigation -->
      <nav class="border-b border-white/[.20] relative">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">
            <div class="logo">

            </div>
            <div class="absolute inset-y-0 right-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button
                id="mobile-menu-btn"
                type="button"
                class="relative flex w-[60px] h-[35px] justify-center items-center border border-white/20 p-2.5 rounded-[27px]"
                aria-controls="mobile-menu"
                aria-expanded="false"
              >
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!--
                  Icon when menu is closed.
      
                  Menu open: "hidden", Menu closed: "block"
                -->
                <svg
                  class="mobile-menu-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="7"
                  viewBox="0 0 16 7"
                  fill="none"
                >
                  <path
                    d="M1 6.5C0.447715 6.5 0 6.05228 0 5.5V5.5C0 4.94772 0.447715 4.5 1 4.5H15C15.5523 4.5 16 4.94772 16 5.5V5.5C16 6.05228 15.5523 6.5 15 6.5H1ZM1 2.5C0.447715 2.5 0 2.05228 0 1.5V1.5C0 0.947715 0.447715 0.5 1 0.5H15C15.5523 0.5 16 0.947715 16 1.5V1.5C16 2.05228 15.5523 2.5 15 2.5H1Z"
                    fill="white"
                    fill-opacity="0.87"
                  />
                </svg>
                <!--
                  Icon when menu is open.
      
                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg
                  class="hidden mobile-menu-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <mask
                    id="mask0_150_145"
                    style="mask-type: alpha"
                    maskUnits="userSpaceOnUse"
                    x="0"
                    y="0"
                    width="24"
                    height="24"
                  >
                    <rect width="24" height="24" fill="#D9D9D9" />
                  </mask>
                  <g mask="url(#mask0_150_145)">
                    <path
                      d="M11.9998 13.4L7.0998 18.3C6.91647 18.4834 6.68314 18.575 6.3998 18.575C6.11647 18.575 5.88314 18.4834 5.6998 18.3C5.51647 18.1167 5.4248 17.8834 5.4248 17.6C5.4248 17.3167 5.51647 17.0834 5.6998 16.9L10.5998 12L5.6998 7.10005C5.51647 6.91672 5.4248 6.68338 5.4248 6.40005C5.4248 6.11672 5.51647 5.88338 5.6998 5.70005C5.88314 5.51672 6.11647 5.42505 6.3998 5.42505C6.68314 5.42505 6.91647 5.51672 7.0998 5.70005L11.9998 10.6L16.8998 5.70005C17.0831 5.51672 17.3165 5.42505 17.5998 5.42505C17.8831 5.42505 18.1165 5.51672 18.2998 5.70005C18.4831 5.88338 18.5748 6.11672 18.5748 6.40005C18.5748 6.68338 18.4831 6.91672 18.2998 7.10005L13.3998 12L18.2998 16.9C18.4831 17.0834 18.5748 17.3167 18.5748 17.6C18.5748 17.8834 18.4831 18.1167 18.2998 18.3C18.1165 18.4834 17.8831 18.575 17.5998 18.575C17.3165 18.575 17.0831 18.4834 16.8998 18.3L11.9998 13.4Z"
                      fill="white"
                      fill-opacity="0.87"
                    />
                  </g>
                </svg>
              </button>
            </div>
            <div class="flex items-center justify-start">
              <div class="flex flex-shrink-0 items-center">
                <a
                  class="h-8 w-auto text-white/[.87] text-xl font-bold"
                  href="https://nimkat.agency"
                  >Nimkat</a
                >
              </div>
            </div>
            <div
              class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-end"
            >
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300" -->
                  <a
                    href="#about"
                    class="text-gray-300 rounded-md px-3 py-2 text-sm font-medium"
                    aria-current="page"
                    >About us</a
                  >
                  <a
                    href="#projects"
                    class="text-gray-300 rounded-md px-3 py-2 text-sm font-medium"
                    >Latest Projects</a
                  >
                  <a
                    href="#services"
                    class="text-gray-300 rounded-md px-3 py-2 text-sm font-medium"
                    >Services</a
                  >
                  <a
                    href="#contact"
                    class="text-gray-300 rounded-md px-3 py-2 text-sm font-medium"
                    >Contact Us</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div
          class="fixed left-[-100%] top-0 w-[70%] bg-black transition-all"
          style="height: 100vh"
          id="mobile-menu"
        >
          <div class="space-y-1 px-2 pb-3 pt-8">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300" -->
            <a
              href="#about"
              class="text-white block rounded-md px-3 py-2 text-sm font-medium"
              aria-current="page"
              >About us</a
            >
            <a
              href="#projects"
              class="text-gray-300 block rounded-md px-3 py-2 text-sm font-medium"
              >Latest Projects</a
            >
            <a
              href="#services"
              class="text-gray-300 block rounded-md px-3 py-2 text-sm font-medium"
              >Services</a
            >
            <a
              href="#contact"
              class="text-gray-300 block rounded-md px-3 py-2 text-sm font-medium"
              >Contact Us</a
            >
          </div>
          <!-- Social -->
          <div
            class="mt-8 md:mt-0 md:justify-self-end pl-4 absolute bottom-[20%] left-0"
          >
            <ul class="flex space-x-3">
              <li>
                <a
                  href="https://www.instagram.com/nimkat.agency?igsh=MTk3YXFmcm04Zmo2Zg=="
                  target="_blank"
                  rel="nofollow"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.496 3H16.505C18.987 3 21 5.012 21 7.496V16.505C21 18.987 18.988 21 16.504 21H7.496C5.013 21 3 18.988 3 16.504V7.496C3 5.013 5.012 3 7.496 3V3Z"
                      stroke="#DFDFDF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M16.949 6.71304C16.763 6.71404 16.612 6.86504 16.612 7.05104C16.612 7.23704 16.764 7.38804 16.95 7.38804C17.136 7.38804 17.287 7.23704 17.287 7.05104C17.288 6.86404 17.136 6.71304 16.949 6.71304"
                      stroke="#DFDFDF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M14.5455 9.45432C15.9514 10.8602 15.9514 13.1396 14.5455 14.5455C13.1396 15.9514 10.8602 15.9514 9.45432 14.5455C8.04843 13.1396 8.04843 10.8602 9.45432 9.45432C10.8602 8.04843 13.1396 8.04843 14.5455 9.45432"
                      stroke="#DFDFDF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a
                  href="https://twitter.com/NimkatAgency"
                  target="_blank"
                  rel="nofollow"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M2.36719 3L9.46289 13.1406L2.74023 21H5.38086L10.6445 14.8301L14.9609 21H21.8711L14.4492 10.375L20.7402 3H18.1406L13.2715 8.6875L9.29883 3H2.36719ZM6.20703 5H8.25586L18.0332 19H16.002L6.20703 5Z"
                      fill="#DFDFDF"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="max-w-[90%] md:max-w-[72%] mx-auto">
        <!-- Hero -->
        <section style="height: 100vh">
          <div class="flex flex-col justify-center h-[100%]">
            <h1 class="nimkat-title text-center text-4xl md:text-7xl font-bold">
              Building Digital<br />
              Dimensions
            </h1>

            <div class="flex flex-col text-center mt-16">
              <div
                class="w-[20px] h-[29px] md:w-[40px] md:h-[58px] border rounded-full relative mx-auto"
              >
                <div
                  class="nimkat-scroll-animate w-px h-[5px] md:h-[10px] bg-white absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-5px]"
                ></div>
              </div>
              <p class="text-white text-lg md:text-2xl font-extralight mt-4">
                Scroll down to see
              </p>
            </div>
          </div>
        </section>

        <!-- About Us -->
        <section id="about" class="relative">
          <h2 class="text-sm md:text-xl text-white/60">About Us</h2>
          <p class="nimkat-section-title text-2xl md:text-6xl font-bold">
            Experience and innovation shaping unmatched digital excellence
          </p>

          <div
            class="grid grid-cols-3 gap-x-3 md:gap-x-8 mt-4 md:mt-16 justify-center justify-items-center"
          >
            <!-- Members -->
            <div
              class="relative backdrop-blur-sm bg-[#d9d9d9]/10 w-[100%] h-[74px] md:h-[192px] text-white/85 font-light rounded-[12px] md:rounded-[24px]"
              style="
                box-shadow: -4px 4px 8px 0px rgba(255, 255, 255, 0.1) inset,
                  4px -4px 25px 0px rgba(165, 165, 165, 0.1) inset;
                backdrop-filter: blur(0.5px);
              "
            >
              <div
                class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]"
              >
                <p class="text-lg md:text-2xl text-center">20+</p>
                <p class="text-xs md:text-2xl mt-1 md:mt-4 text-center">
                  Members
                </p>
              </div>
            </div>

            <!-- Projects -->
            <div
              class="relative backdrop-blur-sm bg-[#d9d9d9]/10 w-[100%] h-[74px] md:h-[192px] text-white/85 font-light rounded-[12px] md:rounded-[24px]"
              style="
                box-shadow: -4px 4px 8px 0px rgba(255, 255, 255, 0.1) inset,
                  4px -4px 25px 0px rgba(165, 165, 165, 0.1) inset;
                backdrop-filter: blur(0.5px);
              "
            >
              <div
                class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]"
              >
                <p class="text-lg md:text-2xl text-center">400+</p>
                <p class="text-xs md:text-2xl mt-1 md:mt-4 text-center">
                  Projects
                </p>
              </div>
            </div>

            <!-- Experience -->
            <div
              class="relative backdrop-blur-sm bg-[#d9d9d9]/10 w-[100%] h-[74px] md:h-[192px] text-white/85 font-light rounded-[12px] md:rounded-[24px]"
              style="
                box-shadow: -4px 4px 8px 0px rgba(255, 255, 255, 0.1) inset,
                  4px -4px 25px 0px rgba(165, 165, 165, 0.1) inset;
                backdrop-filter: blur(0.5px);
              "
            >
              <div
                class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]"
              >
                <p class="text-lg md:text-2xl text-center">5 Years</p>
                <p class="text-xs md:text-2xl mt-1 md:mt-4 text-center">
                  Experience
                </p>
              </div>
            </div>
          </div>
        </section>

        <!-- Latest Projects -->
        <section id="projects" class="mt-[88px] md:mt-[140px]">
          <h2 class="text-sm md:text-xl text-white/60">Latest Project</h2>
          <p class="nimkat-section-title text-2xl md:text-6xl font-bold">
            Showcasing our freshest digital masterpiece
          </p>

          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-0 md:gap-x-8 md:flex-row mt-8 md:mt-[115px]"
          >
            <article>
              <header>
                <div
                  style="
                    background: url('assets/image/bleachd.webp') lightgray 50% /
                      cover no-repeat;
                  "
                  class="nimkat-project-img w-[100%] h-[310px] rounded-3xl"
                ></div>
                <div class="tags mt-4">
                  <ul class="flex space-x-2">
                    <li
                      class="text-xs text-white/85 border py-2 px-2.5 rounded-[52px]"
                    >
                      Product Design
                    </li>
                    <li
                      class="text-xs text-white/85 border py-2 px-2.5 rounded-[52px]"
                    >
                      Web Development
                    </li>
                  </ul>
                </div>
              </header>
              <footer class="mt-2">
                <h2 class="text-base text-white/85">Bleachd Studio</h2>
              </footer>
            </article>
            <article class="mt-8 md:mt-0">
              <header>
                <div
                  style="
                    background: url('assets/image/ticket.webp') lightgray 50% /
                      cover no-repeat;
                  "
                  class="nimkat-project-img w-[100%] h-[310px] rounded-3xl"
                ></div>
                <div class="tags mt-4">
                  <ul class="flex space-x-2">
                    <li
                      class="text-xs text-white/85 border py-2 px-2.5 rounded-[52px]"
                    >
                      Mobile Development
                    </li>
                    <li
                      class="text-xs text-white/85 border py-2 px-2.5 rounded-[52px]"
                    >
                      Marketing
                    </li>
                  </ul>
                </div>
              </header>
              <footer class="mt-2">
                <h2 class="text-base text-white/85">Ticket 24</h2>
              </footer>
            </article>
            <article class="mt-8 md:mt-0 md:hidden lg:block">
              <header>
                <div
                  style="
                    background: url('assets/image/foodie-global.webp') lightgray
                      50% / cover no-repeat;
                  "
                  class="nimkat-project-img w-[100%] h-[310px] rounded-3xl"
                ></div>
                <div class="tags mt-4">
                  <ul class="flex space-x-2">
                    <li
                      class="text-xs text-white/85 border py-2 px-2.5 rounded-[52px]"
                    >
                      Backend Development
                    </li>
                    <li
                      class="text-xs text-white/85 border py-2 px-2.5 rounded-[52px]"
                    >
                      Web Development
                    </li>
                  </ul>
                </div>
              </header>
              <footer class="mt-2">
                <h2 class="text-base text-white/85">FoodieGlobal</h2>
              </footer>
            </article>
          </div>
        </section>

        <!-- Services -->
        <section id="services" class="mt-[88px] md:mt-[140px] relative">
          <h2 class="text-sm md:text-xl text-white/60">Services</h2>
          <p class="nimkat-section-title text-2xl md:text-6xl font-bold">
            All your digital needs, addressed here
          </p>

          <div
            class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8 md:flex-row mt-8 md:mt-[115px]"
          >
            <div class="relative p-8 border border-white/20 rounded-3xl">
              <div
                class="nimkat-eclipse absolute bottom-0 left-[50%] translate-x-[-50%]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="310"
                  height="159"
                  fill="none"
                  xmlns:v="https://vecta.io/nano"
                >
                  <g filter="url(#A)">
                    <circle
                      cx="155"
                      cy="155"
                      r="65"
                      fill="#8e7ba1"
                      fill-opacity=".3"
                    />
                  </g>
                  <defs>
                    <filter
                      id="A"
                      x="0"
                      y="0"
                      width="310"
                      height="310"
                      filterUnits="userSpaceOnUse"
                      color-interpolation-filters="sRGB"
                    >
                      <feFlood flood-opacity="0" />
                      <feBlend in="SourceGraphic" />
                      <feGaussianBlur stdDeviation="45" />
                    </filter>
                  </defs>
                </svg>
              </div>
              <div
                class="nimkat-service-icon rounded-full flex items-center justify-center w-[60px] h-[60px]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                >
                  <path
                    d="M17.3379 5.1685L15.2188 7.29039"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M14.8255 2.65237L12.7063 4.77425"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M13.8169 13.817L6.18311 6.18321"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M4.41431 10.7804L5.18784 11.5539C5.28549 11.6515 5.33842 11.7852 5.33406 11.9232C5.32971 12.0613 5.26846 12.1913 5.16484 12.2826L1.71175 15.3247C1.2766 15.708 1.01937 16.2543 1.00105 16.8339C0.982725 17.4135 1.20494 17.9749 1.615 18.385V18.385C2.02504 18.795 2.58641 19.0172 3.16601 18.9989C3.7456 18.9806 4.29182 18.7234 4.67514 18.2882L7.71714 14.8351C7.80843 14.7315 7.9385 14.6703 8.07651 14.6659C8.21453 14.6616 8.34821 14.7145 8.44585 14.8122L9.21954 15.5858C9.5946 15.9609 10.1033 16.1716 10.6337 16.1716C11.1641 16.1716 11.6728 15.9609 12.0479 15.5858L18.3611 9.27269C19.2129 8.42091 19.2129 7.03992 18.3611 6.18814L13.8119 1.63881C13.4029 1.22977 12.8481 0.999969 12.2696 0.999969C11.6912 0.999969 11.1364 1.22977 10.7273 1.63881L4.41434 7.95181C4.03924 8.32689 3.82851 8.83562 3.8285 9.36608C3.8285 9.89654 4.03922 10.4053 4.41431 10.7804Z"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="details">
                <h3 class="text-white/85 text-base font-bold my-4">UI | UX</h3>
                <p class="text-white/60 text-sm">
                  Thought and idea in the form of an exceptional visual
                  experience
                </p>
              </div>
            </div>
            <div class="p-8 border border-white/20 rounded-3xl md:col-span-2">
              <div
                class="nimkat-service-icon rounded-full flex items-center justify-center w-[60px] h-[60px]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="22"
                  height="18"
                  viewBox="0 0 22 18"
                  fill="none"
                >
                  <path
                    d="M12.78 1L9.21997 17"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M17 5L21 9L17 13"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M5 13L1 9L5 5"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="details">
                <h3 class="text-white/85 text-base font-bold my-4">
                  Development
                </h3>
                <p class="text-white/60 text-sm">
                  Turning ideas into code and user experiences
                </p>
              </div>
            </div>
            <div class="p-8 border border-white/20 rounded-3xl md:col-span-2">
              <div
                class="nimkat-service-icon rounded-full flex items-center justify-center w-[60px] h-[60px]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    d="M15.456 9.757L12.037 13.177L9.75703 10.897L7.47803 13.177"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M16.7469 6.18703C19.663 9.10307 19.663 13.8309 16.7469 16.7469C13.8309 19.663 9.10304 19.663 6.18703 16.7469C3.27099 13.8309 3.27099 9.10304 6.18703 6.18703C9.10307 3.27099 13.8309 3.27099 16.7469 6.18703"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M20 20L16.75 16.75"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="details">
                <h3 class="text-white/85 text-base font-bold my-4">
                  Marketing
                </h3>
                <p class="text-white/60 text-sm">
                  Strategic marketing solutions for unparalleled impact.
                </p>
              </div>
            </div>
            <div class="p-8 border border-white/20 rounded-3xl">
              <div
                class="nimkat-service-icon rounded-full flex items-center justify-center w-[60px] h-[60px]"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="21"
                  viewBox="0 0 20 21"
                  fill="none"
                >
                  <path
                    d="M14.0601 17.75H15.8101"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M12.875 8.125C11.839 8.125 11 8.964 11 10"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M11.875 5C9.666 5 7.875 6.791 7.875 9"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M16 8H17C18.105 8 19 8.895 19 10V18C19 19.105 18.105 20 17 20H12.875C11.77 20 10.875 19.105 10.875 18V13"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M7.44988 15L7.05988 18.11"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M6 18.11H10.875"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M17 4V3C17 1.895 16.105 1 15 1H3C1.895 1 1 1.895 1 3V13C1 14.105 1.895 15 3 15H10.875"
                    stroke="#C7C7C7"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="details">
                <h3 class="text-white/85 text-base font-bold my-4">Startup</h3>
                <p class="text-white/60 text-sm">
                  A bridge towards market growth and innovation
                </p>
              </div>
            </div>
          </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="mt-[88px] md:mt-[140px] relative">
          <h2 class="text-sm md:text-xl text-white/60">Contact Us</h2>
          <p class="nimkat-section-title text-2xl md:text-6xl font-bold">
            Forge ahead; we're just a message away
          </p>

          <form id="nimkat-contact-form" class="mt-16" action="#" method="post">
            <!-- Details -->
            <div class="grid gap-6 md:gap-8 grid-cols-1 md:grid-cols-2">
              <div class="relative">
                <label
                  class="pl-3 text-xs text-white/40 opacity-0 absolute top-[-35%]"
                  for="first_name"
                  >First Name</label
                >
                <input
                  type="text"
                  class="transition bg-transparent text-white/85 w-[100%] border border-white/20 focus:border-white/85 placeholder:text-white/60 rounded-xl p-3 outline-none"
                  placeholder="First Name"
                  id="first_name"
                  name="first_name"
                />
              </div>

              <div class="relative">
                <label
                  class="pl-3 text-xs text-white/40 opacity-0 absolute top-[-35%]"
                  for="last_name"
                  >Last Name (optional)</label
                >
                <input
                  type="text"
                  class="transition bg-transparent text-white/85 w-[100%] border border-white/20 focus:border-white/85 placeholder:text-white/60 rounded-xl p-3 outline-none"
                  placeholder="Last Name (optional)"
                  id="last_name"
                  name="last_name"
                />
              </div>

              <div class="relative">
                <label
                  class="pl-3 text-xs text-white/40 opacity-0 absolute top-[-35%]"
                  for="mobile"
                  >Mobile</label
                >
                <input
                  type="text"
                  class="transition bg-transparent text-white/85 w-[100%] border border-white/20 focus:border-white/85 placeholder:text-white/60 rounded-xl p-3 outline-none"
                  placeholder="Mobile"
                  id="mobile"
                  name="mobile"
                />
              </div>

              <div class="relative">
                <label
                  class="pl-3 text-xs text-white/40 opacity-0 absolute top-[-35%]"
                  for="email"
                  >Email (optional)</label
                >
                <input
                  type="text"
                  class="transition bg-transparent text-white/85 w-[100%] border border-white/20 focus:border-white/85 placeholder:text-white/60 rounded-xl p-3 outline-none"
                  placeholder="Email (optional)"
                  id="email"
                  name="email"
                />
              </div>
            </div>

            <!-- Type of request -->
            <div class="mt-16">
              <h3 class="text-base md:text-2xl text-white/85 font-bold">
                Choose Your Type Of Request
              </h3>

              <ul
                id="nimkat-contact-services"
                class="grid grid-cols-2 gap-4 md:flex md:space-x-4 mt-6"
              >
                <li
                  class="flex items-center justify-center border border-white/20 rounded-full w-[100%] md:w-[150px] h-[34px] text-white/85 nimkat-service-active cursor-pointer"
                >
                  UI | UX
                </li>
                <li
                  class="flex items-center justify-center border border-white/20 rounded-full w-[100%] md:w-[150px] h-[34px] text-white/85 cursor-pointer"
                >
                  Development
                </li>
                <li
                  class="flex items-center justify-center border border-white/20 rounded-full w-[100%] md:w-[150px] h-[34px] text-white/85 cursor-pointer"
                >
                  Marketing
                </li>
                <li
                  class="flex items-center justify-center border border-white/20 rounded-full w-[100%] md:w-[150px] h-[34px] text-white/85 cursor-pointer"
                >
                  Startup
                </li>
              </ul>
            </div>

            <!-- Description -->
            <div class="mt-16">
              <label
                class="pl-3 text-xs text-white/40 opacity-0 absolute top-[-35%]"
                for="description"
                >Description(optional)</label
              >
              <textarea
                name="description"
                id=""
                cols="30"
                rows="10"
                placeholder="Description(optional)"
                class="transition bg-transparent text-white/85 w-[100%] border border-white/20 focus:border-white/85 placeholder:text-white/60 rounded-xl p-3 outline-none"
              ></textarea>
            </div>

            <div class="mt-6 flex justify-end">
              <button
                id="nimkat-contact-submit"
                class="text-sm md:text-lg font-normal flex items-center justify-center border border-white/20 rounded-full w-[169px] h-[43px] bg-white/85"
              >
                Send Request
              </button>
            </div>
          </form>
        </section>

        <!-- Blog -->
        <section id="blog" class="mt-[88px] md:mt-[140px]">
          <h2 class="text-sm md:text-xl text-white/60">Blog</h2>
          <p class="nimkat-section-title text-2xl md:text-6xl font-bold">
            Find out latest tutorials and trends
          </p>

          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-0 md:gap-x-8 md:flex-row mt-8 md:mt-[115px]"
          >
            <a href="https://nimkat.agency">
              <article>
                <header>
                  <div
                    class="nimkat-project-img w-[100%] h-[310px] rounded-2xl"
                    style="
                      background: url('assets/image/marketing-campaign.webp')
                        transparent 50% / cover no-repeat;
                    "
                  ></div>
                </header>
                <footer class="mt-4 flex flex-col space-y-3">
                  <h2 class="text-base text-white/85">
                    How to make your first website
                  </h2>
                  <p class="text-sm text-white/60">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua
                  </p>
                </footer>
              </article>
            </a>
            <a href="https://nimkat.agency">
              <article>
                <header>
                  <div
                    class="nimkat-project-img w-[100%] h-[310px] rounded-2xl"
                    style="
                      background: url('assets/image/marketing-campaign.webp')
                        transparent 50% / cover no-repeat;
                    "
                  ></div>
                </header>
                <footer class="mt-4 flex flex-col space-y-3">
                  <h2 class="text-base text-white/85">
                    How to make your first website
                  </h2>
                  <p class="text-sm text-white/60">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua
                  </p>
                </footer>
              </article>
            </a>
            <a href="https://nimkat.agency">
              <article>
                <header>
                  <div
                    class="nimkat-project-img w-[100%] h-[310px] rounded-2xl"
                    style="
                      background: url('assets/image/marketing-campaign.webp')
                        transparent 50% / cover no-repeat;
                    "
                  ></div>
                </header>
                <footer class="mt-4 flex flex-col space-y-3">
                  <h2 class="text-base text-white/85">
                    How to make your first website
                  </h2>
                  <p class="text-sm text-white/60">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua
                  </p>
                </footer>
              </article>
            </a>
          </div>
        </section>
      </div>
    </main>
    <footer class="mt-[207px]">
      <div
        class="max-w-[90%] mx-auto md:max-w-[72%] py-6 md:p-8 border-t border-white/20"
      >
        <!-- Intro -->
        <section>
          <h3 class="text-white/85 text-base md:text-xl font-bold">Nimkat</h3>
          <h4 class="nimkat-title text-[32px] font-bold mt-4">
            Building Digital <br />Dimensions
          </h4>
        </section>

        <section class="mt-16 grid grid-cols-1 md:grid-cols-2">
          <!-- Links -->
          <div>
            <ul class="flex flex-col md:flex-row">
              <li
                class="w-[100%] md:w-auto mb-4 md:border-r border-white/20 md:pr-4"
              >
                <a href="#about" class="text-base text-white/60 font-normal"
                  >About Us</a
                >
              </li>
              <li
                class="w-[100%] md:w-auto mb-4 md:border-r border-white/20 md:px-4"
              >
                <a href="#projects" class="text-base text-white/60 font-normal"
                  >Latest Project</a
                >
              </li>
              <li
                class="w-[100%] md:w-auto mb-4 md:border-r border-white/20 md:px-4"
              >
                <a href="#services" class="text-base text-white/60 font-normal"
                  >Services</a
                >
              </li>
              <li class="w-[100%] md:w-auto md:pl-4">
                <a href="#contact" class="text-base text-white/60 font-normal"
                  >Contact Us</a
                >
              </li>
            </ul>
          </div>

          <!-- Social -->
          <div class="mt-8 md:mt-0 md:justify-self-end">
            <ul class="flex space-x-3">
              <li>
                <a
                  href="https://www.instagram.com/nimkat.agency?igsh=MTk3YXFmcm04Zmo2Zg=="
                  target="_blank"
                  rel="nofollow"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7.496 3H16.505C18.987 3 21 5.012 21 7.496V16.505C21 18.987 18.988 21 16.504 21H7.496C5.013 21 3 18.988 3 16.504V7.496C3 5.013 5.012 3 7.496 3V3Z"
                      stroke="#DFDFDF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M16.949 6.71304C16.763 6.71404 16.612 6.86504 16.612 7.05104C16.612 7.23704 16.764 7.38804 16.95 7.38804C17.136 7.38804 17.287 7.23704 17.287 7.05104C17.288 6.86404 17.136 6.71304 16.949 6.71304"
                      stroke="#DFDFDF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M14.5455 9.45432C15.9514 10.8602 15.9514 13.1396 14.5455 14.5455C13.1396 15.9514 10.8602 15.9514 9.45432 14.5455C8.04843 13.1396 8.04843 10.8602 9.45432 9.45432C10.8602 8.04843 13.1396 8.04843 14.5455 9.45432"
                      stroke="#DFDFDF"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a
                  href="https://twitter.com/NimkatAgency"
                  target="_blank"
                  rel="nofollow"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                  >
                    <path
                      d="M2.36719 3L9.46289 13.1406L2.74023 21H5.38086L10.6445 14.8301L14.9609 21H21.8711L14.4492 10.375L20.7402 3H18.1406L13.2715 8.6875L9.29883 3H2.36719ZM6.20703 5H8.25586L18.0332 19H16.002L6.20703 5Z"
                      fill="#DFDFDF"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </section>
      </div>
    </footer>

    <!-- Todo: toast should be dynamic -->
    <div
      id="nimkat-toast"
      class="fixed w-[100%] md:w-auto top-[65px] left-[-100%] p-4 transition-all"
    >
      <div class="bg-black p-3 border border-white/20 rounded-xl">
        <div class="flex space-x-4">
          <div class="icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
            >
              <circle
                cx="12.0003"
                cy="12.0001"
                r="9.00375"
                stroke="white"
                stroke-opacity="0.87"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M8.44287 12.3392L10.6108 14.5071L10.5968 14.4931L15.4878 9.60205"
                stroke="white"
                stroke-opacity="0.87"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <div class="body text-sm text-white/70">
            <p>
              <span class="pr-1">Thank you!</span> We will get in touch very
              soon.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div
      id="nimkat-error-toast"
      class="fixed w-[100%] md:w-auto top-[65px] left-[-100%] p-4 transition-all"
    >
      <div class="bg-black p-3 border border-white/20 rounded-xl">
        <div class="flex space-x-4">
          <div class="icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
            >
              <mask
                id="mask0_159_227"
                style="mask-type: alpha"
                maskUnits="userSpaceOnUse"
                x="0"
                y="0"
                width="24"
                height="24"
              >
                <rect width="24" height="24" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_159_227)">
                <path
                  d="M12 17C12.2833 17 12.5208 16.9042 12.7125 16.7125C12.9042 16.5208 13 16.2833 13 16C13 15.7167 12.9042 15.4792 12.7125 15.2875C12.5208 15.0958 12.2833 15 12 15C11.7167 15 11.4792 15.0958 11.2875 15.2875C11.0958 15.4792 11 15.7167 11 16C11 16.2833 11.0958 16.5208 11.2875 16.7125C11.4792 16.9042 11.7167 17 12 17ZM12 13C12.2833 13 12.5208 12.9042 12.7125 12.7125C12.9042 12.5208 13 12.2833 13 12V8C13 7.71667 12.9042 7.47917 12.7125 7.2875C12.5208 7.09583 12.2833 7 12 7C11.7167 7 11.4792 7.09583 11.2875 7.2875C11.0958 7.47917 11 7.71667 11 8V12C11 12.2833 11.0958 12.5208 11.2875 12.7125C11.4792 12.9042 11.7167 13 12 13ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z"
                  fill="white"
                  fill-opacity="0.87"
                />
              </g>
            </svg>
          </div>
          <div class="body text-sm text-white/70">
            <p>Please fill out the required fields.</p>
          </div>
        </div>
      </div>
    </div>

    <script async>
      const inputs = document.querySelectorAll("input, textarea");

      // Interactive labels
      inputs.forEach((input) => {
        input.addEventListener("keyup", (e) => {
          if (e.target.value.length) {
            input.parentNode.classList.add("focus");
          } else {
            input.parentNode.classList.remove("focus");
          }
        });

        input.addEventListener("blur", (e) => {
          if (!e.target.value.length) {
            input.parentNode.classList.remove("focus");
          }
        });
      });
    </script>

    <script async>
      const mobileMenu = document.getElementById("mobile-menu");
      const mobileMenuButton = document.getElementById("mobile-menu-btn");
      const mobileMenuIcons = document.querySelectorAll(".mobile-menu-icon");

      let nimkatToastTimeout;
      let nimkatErrToastTimeout;

      mobileMenu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", (e) => {
          toggleMobileMenu();
        });
      });

      // Slide right menu
      mobileMenuButton.addEventListener("click", () => {
        toggleMobileMenu();
      });

      function toggleMobileMenu() {
        mobileMenu.classList.toggle("open");

        mobileMenuIcons.forEach((icon) => {
          icon.classList.toggle("hidden");
        });
      }
    </script>

    <script async>
      const contactForm = document.getElementById("nimkat-contact-form");
      const contactService = document.getElementById("nimkat-contact-services");
      const contactServiceItems = document.querySelectorAll(
        "#nimkat-contact-services li"
      );
      const contactSubmitBtn = document.getElementById("nimkat-contact-submit");
      const nimkatToast = document.getElementById("nimkat-toast");
      const nimkatErrToast = document.getElementById("nimkat-error-toast");

      function getInput(name) {
        return contactForm.querySelector(`input[name="${name}"]`);
      }

      function getTextArea(name) {
        return contactForm.querySelector(`textarea[name=${name}]`);
      }

      function getServices() {
        let services = [];

        contactForm
          .querySelectorAll(".nimkat-service-active")
          .forEach((s) => services.push(s.textContent.trim()));

        return services;
      }

      function isValidEmail(email) {
        return String(email)
          .toLowerCase()
          .match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          );
      }

      function isValidMobile(mobile) {
        return /^\d{7,}$/.test(mobile.replace(/[\s()+\-\.]|ext/gi, ""));
      }

      function showNimkatToast() {
        nimkatToast.classList.add("nimkat-toast-active");

        clearTimeout(nimkatToastTimeout);

        nimkatToastTimeout = setTimeout(() => {
          nimkatToast.classList.remove("nimkat-toast-active");
        }, 3000);
      }

      function showNimkatErrToast() {
        nimkatErrToast.classList.add("nimkat-toast-active");

        clearTimeout(nimkatErrToastTimeout);

        nimkatErrToastTimeout = setTimeout(() => {
          nimkatErrToast.classList.remove("nimkat-toast-active");
        }, 3000);
      }

      contactForm.querySelectorAll("input, textarea").forEach((input) => {
        input.addEventListener("keyup", (e) => {
          e.target.classList.remove("error");
        });
      });

      contactSubmitBtn.addEventListener("click", (e) => {
        e.preventDefault();

        const btn = e.target;

        if (btn.disabled) {
          return;
        }

        let data = {
          firstName: getInput("first_name"),
          lastName: getInput("last_name"),
          email: getInput("email"),
          mobile: getInput("mobile"),
          services: getServices(),
          description: getTextArea("description"),
        };

        if (data.firstName.value.length < 3) {
          data.firstName.classList.add("error");
        }

        if (data.email.value.length && !isValidEmail(data.email.value)) {
          data.email.classList.add("error");
        }

        if (!isValidMobile(data.mobile.value)) {
          data.mobile.classList.add("error");
        }

        let errFields = contactForm.querySelectorAll("input.error");
        if (errFields.length) {
          showNimkatErrToast();

          return;
        }

        var formData = new FormData();

        formData.append("first_name", data.firstName.value);
        formData.append("last_name", data.lastName.value);
        formData.append("email", data.email.value);
        formData.append("mobile", data.mobile.value);
        formData.append("description", data.description.value);
        formData.append("service", data.services.join(", "));

        e.target.disabled = true;
    </script>

    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-7QDEMLTWBF"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-7QDEMLTWBF");
    </script>
  </body>
</html>
