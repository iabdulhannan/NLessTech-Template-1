<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="OneEyeOwl & Mr.Zero">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="../Assets/Stylesheets/Tailwind.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="Assets/Stylesheets/indexStyles.css" rel="stylesheet">
    <link href="../Assets/Frameworks/fontawesome-free-5.15.4-web/css/all.css">

    <title>Details</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="Assets/Scripts/Master.js"></script>

    <style>
        .single-services {
            text-align: center;
            transition-duration: 300ms;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, .1), 0 4px 6px -2px rgba(0, 0, 0, .05);
        }

        nav ul li a {
            text-decoration: none;
            color: #000000;
            text-transform: uppercase;
            display: block;
            font-weight: 600;
            letter-spacing: 0.2em;
            font-size: 14px;
        }

        .stick {
            background-color: #4A90E2;
        }
    </style>

</head>
<body class="font-sans leading-normal tracking-normal bg-white">

<h1 class="text-black absolute p-4 flex items-center gap-x-2 cursor-pointer" onclick="history.back()">
        <span class="text-2xl">&#10094;</span>
    <a href="#">
        Back
    </a>
</h1>
<section
        class="mx-auto flex flex-col md:flex-row items-center text-white border-solid border-b-2 border-catalystLight-e1 py-10">
    <div class="container mt-40 mx-auto pt-40 md:pt-16 px-6 xl:max-w-7xl mx-auto p-4 lg:p-8">
        <div class="flex flex-wrap xl:items-center -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-16 md:mb-0">
                <h1 class="mb-6 text-gray-700 text-3xl md:text-5xl lg:text-6xl leading-tight font-bold tracking-tight">
                    DataMapper</h1>
                <p class="mb-8 text-lg md:text-xl text-gray-500 font-medium">Get to know our DataMapper. Use it to
                    extract data and make it easily accessible for use in your documents, web pages and email templates.
                    A simple drag & drop, or just a few clicks of the mouse gets the job done in minutes. Save that
                    extraction as a data model and use it over and over to design multiple documents .</p>
            </div>
            <div class="w-full md:w-1/2 px-4">
                <div class="relative mx-auto md:mr-0 max-w-max">

                    <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 cursor-pointer text-blue-500 hover:text-blue-600"
                         width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg"
                         data-config-id="auto-svg-3-2" data-path="0.1.0.0.1.0.2">
                        <circle cx="32" cy="32" r="32" fill="currentColor" data-path="0.1.0.0.1.0.2.0"></circle>
                        <path class="text-white"
                              d="M40.5 31.13L26.5 23.05C26.348 22.9622 26.1755 22.916 26 22.916C25.8245 22.916 25.652 22.9622 25.5 23.05C25.3474 23.1381 25.2208 23.265 25.133 23.4177C25.0452 23.5705 24.9993 23.7438 25 23.92V40.08C24.9993 40.2562 25.0452 40.4295 25.133 40.5822C25.2208 40.735 25.3474 40.8619 25.5 40.95C25.652 41.0378 25.8245 41.084 26 41.084C26.1755 41.084 26.348 41.0378 26.5 40.95L40.5 32.87C40.6539 32.7828 40.7819 32.6563 40.871 32.5035C40.96 32.3506 41.007 32.1769 41.007 32C41.007 31.8231 40.96 31.6494 40.871 31.4965C40.7819 31.3437 40.6539 31.2172 40.5 31.13ZM27 38.35V25.65L38 32L27 38.35Z"
                              fill="currentColor" data-path="0.1.0.0.1.0.2.1"></path>
                    </svg>
                    <div class="relative overflow-hidden rounded-7xl">
                        <div class="relative overflow-hidden rounded-7xl">
                            <video class="rounded shadow-md " muted="">
                                <source src="https://static.shuffle.dev/files/video-placeholder.mp4" type="video/mp4"
                                        data-config-id="video" data-path="0.1.0.0.1.0.3.1.0">
                            </video>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mx-auto flex flex-col items-center text-white py-10" style="background-color: #FAFAFA">
    <div class="container mx-auto pt-24 md:pt-16 px-6 xl:max-w-7xl mx-auto p-4 lg:p-8">
        <div class="py-12 text-center">
            <h2 class="text-3xl md:text-4xl font-black mb-5 text-gray-600">
                What we provide
            </h2>
        </div>
        <div class=" grid overflow-hidden grid-cols-3 gap-5 w-auto h-auto">
            <div class="single-services bg-white border-solid border-2 border-transparent rounded text-gray-600 min-w-full min-h-full rounded  text-center py-5">
                <div class="group inline-flex items-center justify-center w-12 h-12 ml-3 mb-8 relative">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.5265 0.000488281H2.11742C0.948003 0.000488281 0 0.948491 0 2.11791V33.8793C0 35.0487 0.948003 35.9967 2.11742 35.9967H27.5265C28.6959 35.9967 29.6439 35.0487 29.6439 33.8793V2.11791C29.6439 0.948491 28.6959 0.000488281 27.5265 0.000488281Z"
                              fill="#4A6CF7"></path>
                        <path opacity="0.5"
                              d="M48.4022 15.1783L34.5141 11.4199L33.4088 15.5087L45.2663 18.7145L38.0692 45.2839L13.541 38.6542L12.4378 42.743L39.0115 49.9274C39.2799 49.9998 39.5601 50.0187 39.8358 49.9829C40.1116 49.9471 40.3776 49.8573 40.6186 49.7187C40.8597 49.5801 41.0711 49.3953 41.2407 49.175C41.4104 48.9547 41.535 48.7031 41.6074 48.4346L49.8929 17.7743C50.0393 17.2324 49.9645 16.6545 49.685 16.1677C49.4054 15.681 48.9441 15.3251 48.4022 15.1783Z"
                              fill="#4A6CF7"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">
                    Map data from various sources
                </h3>
                <p class="leading-relaxed text-gray-500 text-justify mx-5">
                    PlanetPress Connect can capture and read data in pretty much any format. ASCII, print streams, hot
                    folders, emails, HTTP requests, PDFs or database exports. Wherever your data is located, you can use
                    the DataMapper to retrieve and store as a Unified Data Model.
                </p>
            </div>
            <div class="single-services bg-white border-solid border-2 border-transparent rounded  text-gray-600 min-w-full min-h-full rounded  text-center py-5">
                <div class="group inline-flex items-center justify-center w-12 h-12 ml-3 mb-8 relative">
                    <div class="absolute inset-0 rounded-xl -m-3 transform -rotate-6 bg-indigo-300 transition ease-out duration-150 group-hover:rotate-6 group-hover:scale-110"></div>
                    <div class="absolute inset-0 rounded-xl -m-3 transform rotate-2 bg-indigo-800 bg-opacity-75 shadow-inner transition ease-out duration-150 group-hover:-rotate-3 group-hover:scale-110"></div>
                    <svg class="hi-outline hi-device-mobile inline-block w-10 h-10 text-white relative transform transition ease-out duration-150 group-hover:scale-125"
                         stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                              d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2 mx-5">
                    Unified data Model for the design phase
                </h3>
                <p class="leading-relaxed text-gray-500 text-justify mx-5">
                    Once created, the Unified Data Model allows for the easy creation of print documents, emails or web
                    pages. Even if the data comes from different systems, they look like they’re all coming from the
                    same place, making it that much simpler for the person responsible for the design to do his/her
                    job. </p>
            </div>
            <div class="single-services bg-white border-solid border-2 border-transparent rounded  text-gray-600 min-w-full min-h-full rounded  text-center py-5">
                <div class="group inline-flex items-center justify-center w-12 h-12 ml-3 mb-8 relative">
                    <div class="absolute inset-0 rounded-xl -m-3 transform -rotate-6 bg-indigo-300 transition ease-out duration-150 group-hover:rotate-6 group-hover:scale-110"></div>
                    <div class="absolute inset-0 rounded-xl -m-3 transform rotate-2 bg-indigo-800 bg-opacity-75 shadow-inner transition ease-out duration-150 group-hover:-rotate-3 group-hover:scale-110"></div>
                    <svg class="hi-outline hi-device-mobile inline-block w-10 h-10 text-white relative transform transition ease-out duration-150 group-hover:scale-125"
                         stroke="currentColor" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                              d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2 mx-5">
                    Unified Data Model in multiple designs
                </h3>
                <p class="leading-relaxed text-gray-500 text-justify mx-5">
                    Once they’re created, Unified Data Models can be used for the composition of any PlanetPress
                    documents or variations of the same document. A Unified Data Model acts as a data source. So for
                    instance, let’s say you changed a variable like quantity in a HTML invoice, the email within which
                    it’s embedded is then automatically updated with the new information.
                </p>

            </div>
        </div>
    </div>

    <!-- Mapping -->
    <div class="container mx-auto pt-24 md:pt-16 px-6 xl:max-w-7xl mx-auto p-4 lg:p-8">
        <div class="w-full px-4">
            <div class="mb-12 lg:mb-6">
              <span class="text-sm text-indigo-800 uppercase tracking-wider mb-2 font-semibold text-lg mb-2 block ">
                Product Features
              </span>
                <h2 class=" font-bold text-3xl sm:text-4xl text-gray-900 mb-4 ">
                    Main Features Mapping
                </h2>
                <p class=" text-lg sm:text-xl  leading-relaxed sm:leading-relaxed text-gray-600 ">
                    Majorly following are our main features list for this product.
                </p>
            </div>
        </div>

        <div class="w-full px-4 flex flex-col gap-5 flex-wrap">
            <h2 class="font-bold text-2xl leading-relaxed sm:leading-relaxed text-gray-900">Standard</h2>
            <div class="grid grid-cols-2 gap-3  w-full">
                <div class="flex gap-3 items-center">
                           <span class="bg-indigo-400 h-8 w-8 flex justify-center items-center rounded">
                     <svg width="16" height="13" viewBox="0 0 16 13" class="fill-current text-white">
                    <path d="M5.8535 12.6631C5.65824 12.8584 5.34166 12.8584 5.1464 12.6631L0.678505 8.1952C0.483242 7.99994 0.483242 7.68336 0.678505 7.4881L2.32921 5.83739C2.52467 5.64193 2.84166 5.64216 3.03684 5.83791L5.14622 7.95354C5.34147 8.14936 5.65859 8.14952 5.85403 7.95388L13.3797 0.420561C13.575 0.22513 13.8917 0.225051 14.087 0.420383L15.7381 2.07143C15.9333 2.26669 15.9333 2.58327 15.7381 2.77854L5.8535 12.6631Z"></path>
                    </svg>
                    </span>
                    <p class="font-medium text-base text-black">Simplified data mapping wizard for Database, CSV and
                        Excel</p>
                </div>
                <div class="flex gap-3 items-center">
                           <span class="bg-indigo-400 h-8 w-8 flex justify-center items-center rounded">
                     <svg width="16" height="13" viewBox="0 0 16 13" class="fill-current text-white">
                    <path d="M5.8535 12.6631C5.65824 12.8584 5.34166 12.8584 5.1464 12.6631L0.678505 8.1952C0.483242 7.99994 0.483242 7.68336 0.678505 7.4881L2.32921 5.83739C2.52467 5.64193 2.84166 5.64216 3.03684 5.83791L5.14622 7.95354C5.34147 8.14936 5.65859 8.14952 5.85403 7.95388L13.3797 0.420561C13.575 0.22513 13.8917 0.225051 14.087 0.420383L15.7381 2.07143C15.9333 2.26669 15.9333 2.58327 15.7381 2.77854L5.8535 12.6631Z"></path>
                    </svg>
                    </span>
                    <p class="font-medium text-base text-black">Text data mapping</p>
                </div>
                <div class="flex gap-3 items-center">
                           <span class="bg-indigo-400 h-8 w-8 flex justify-center items-center rounded">
                     <svg width="16" height="13" viewBox="0 0 16 13" class="fill-current text-white">
                    <path d="M5.8535 12.6631C5.65824 12.8584 5.34166 12.8584 5.1464 12.6631L0.678505 8.1952C0.483242 7.99994 0.483242 7.68336 0.678505 7.4881L2.32921 5.83739C2.52467 5.64193 2.84166 5.64216 3.03684 5.83791L5.14622 7.95354C5.34147 8.14936 5.65859 8.14952 5.85403 7.95388L13.3797 0.420561C13.575 0.22513 13.8917 0.225051 14.087 0.420383L15.7381 2.07143C15.9333 2.26669 15.9333 2.58327 15.7381 2.77854L5.8535 12.6631Z"></path>
                    </svg>
                    </span>
                    <p class="font-medium text-base text-black">XML data mapping</p>
                </div>
                <div class="flex gap-3 items-center">
                           <span class="bg-indigo-400 h-8 w-8 flex justify-center items-center rounded">
                     <svg width="16" height="13" viewBox="0 0 16 13" class="fill-current text-white">
                    <path d="M5.8535 12.6631C5.65824 12.8584 5.34166 12.8584 5.1464 12.6631L0.678505 8.1952C0.483242 7.99994 0.483242 7.68336 0.678505 7.4881L2.32921 5.83739C2.52467 5.64193 2.84166 5.64216 3.03684 5.83791L5.14622 7.95354C5.34147 8.14936 5.65859 8.14952 5.85403 7.95388L13.3797 0.420561C13.575 0.22513 13.8917 0.225051 14.087 0.420383L15.7381 2.07143C15.9333 2.26669 15.9333 2.58327 15.7381 2.77854L5.8535 12.6631Z"></path>
                    </svg>
                    </span>
                    <p class="font-medium text-base text-black">PDF data mapping (<span class="italic">including PDF/VT structure</span>
                        )</p>
                </div>
            </div>

            <h2 class="font-bold text-2xl leading-relaxed sm:leading-relaxed text-gray-900">Optional</h2>
            <div class="grid grid-cols-2 gap-3  w-full">
                <div class="flex gap-3 items-center">
                           <span class="bg-indigo-400 h-8 w-8 flex justify-center items-center rounded">
                     <svg width="16" height="13" viewBox="0 0 16 13" class="fill-current text-white">
                    <path d="M5.8535 12.6631C5.65824 12.8584 5.34166 12.8584 5.1464 12.6631L0.678505 8.1952C0.483242 7.99994 0.483242 7.68336 0.678505 7.4881L2.32921 5.83739C2.52467 5.64193 2.84166 5.64216 3.03684 5.83791L5.14622 7.95354C5.34147 8.14936 5.65859 8.14952 5.85403 7.95388L13.3797 0.420561C13.575 0.22513 13.8917 0.225051 14.087 0.420383L15.7381 2.07143C15.9333 2.26669 15.9333 2.58327 15.7381 2.77854L5.8535 12.6631Z"></path>
                    </svg>
                    </span>
                    <p class="font-medium text-base text-black">PCL data mapping</p>
                </div>
            </div>
        </div>


    </div>

</section>
<footer class="px-10 pt-5">
    <div class="">
        <div class="grid grid-cols-12">
            <div class="sm:col-span-12 md:col-span-6 px-10">
                <h6 class="font-semibold">About</h6>
                <p class="text-justify">
                    Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to
                    help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code
                    or snippets as the code wants to be simple. We will help programmers build up concepts in
                    different programming languages that include C, C++, Java,
                    HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
            </div>

            <div class="sm:col-span-6 md:col-span-3">
                <h6 class="font-semibold">Categories</h6>
                <ul class="footer-links">
                    <li><a href="#">C</a></li>
                    <li><a href="#">UI Design</a></li>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">Java</a></li>
                </ul>
            </div>

            <div class="col-span-6 md:col-span-3">
                <h6 class="font-semibold">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="contactForm.html">Contact Us</a></li>
                    <li><a href="#">Request Demo</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <hr class="my-5">
    </div>
    <div>
        <div class="flex justify-around pb-5">
            <div class="">
                <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
                    <a href="#">NLESSTECH</a>.
                </p>
            </div>

            <div class="">
                <ul class="flex gap-x-4">
                    <li class=""><a href="#"><img src="Assets/Icons/githubIcon.svg"></a></li>
                    <li><a href="#"><img src="Assets/Icons/twitterIcon.svg"></a></li>
                    <li><a href="#"><img src="Assets/Icons/linkedinIcon.svg"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>