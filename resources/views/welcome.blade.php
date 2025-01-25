<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Mikael Endale Portfolio</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
    <style>
        /* Customize these styles */
        .signature-container {
            display: flex;
            justify-content: center;
            align-items: center;
            /* Full viewport height to center vertically */
        }

        .signature-light,
        .signature-dark {
            display: none;
            max-width: 100%;
            /* Ensure the image scales properly */
            margin: auto;
            /* Center the image horizontally */
        }

        html.dark .signature-dark {
            display: block;
            text-align: center;
            /* Center the image horizontally */
        }

        html:not(.dark) .signature-light {
            display: block;
            text-align: center;
            /* Center the image horizontally */
        }
    </style>
    <script>
        // Check if dark mode is enabled in the local storage (or from PHP cookie value)
        const darkMode = localStorage.getItem("dark-mode") === "true" || "<?php echo isset($_COOKIE['dark-mode']) && $_COOKIE['dark-mode'] === 'true' ? 'true' : 'false'; ?>";

        const signatureLight = document.querySelector(".signature-light");
        const signatureDark = document.querySelector(".signature-dark");

        // Show or hide signatures based on the dark mode value
        if (darkMode === "true") {
            document.querySelector("html").classList.add("dark");
            signatureLight.style.display = "none"; // Hide light mode signature
            signatureDark.style.display = "block"; // Show dark mode signature
        } else {
            document.querySelector("html").classList.remove("dark");
            signatureLight.style.display = "block"; // Show light mode signature
            signatureDark.style.display = "none"; // Hide dark mode signature
        }

        // Optional: Handle dark mode toggle (switch)
        function toggleDarkMode() {
            const newDarkMode = !darkMode;
            localStorage.setItem("dark-mode", newDarkMode ? "true" : "false");
            location.reload(); // Reload page to apply changes
        }
    </script>
</head>

<body class="crok3 cd5fh c0n2d ca1ms ciyl2 cmwzp c7v7z">
    <div class="cb1d7 c3x9r">
        <div class="cxsad conep">
            <div class="cxq13 c3v30 catbj c9rq6 cmlqw czk57 c2yrc">
                <div class="cbpt3 cxnuf">
                    <div class="coily c78d5 c27dl">
                        <!-- Header -->
                        <header class="cvz7l cpi2s">
                            <!-- Dark mode toggle -->
                            <div class="czq8f coily c3mug">
                                <div class="cbdaa cyj82 c8xr8 c2276">
                                    <input type="checkbox" name="light-switch" id="light-switch"
                                        class="light-switch cee2v" />
                                    <label class="cu81w ch70x c090i" for="light-switch">
                                        <svg class="cx0yj" width="16" height="16"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="cvgee"
                                                d="M7 0h2v2H7zM12.88 1.637l1.414 1.415-1.415 1.413-1.413-1.414zM14 7h2v2h-2zM12.95 14.433l-1.414-1.413 1.413-1.415 1.415 1.414zM7 14h2v2H7zM2.98 14.364l-1.413-1.415 1.414-1.414 1.414 1.415zM0 7h2v2H0zM3.05 1.706 4.463 3.12 3.05 4.535 1.636 3.12z">
                                            </path>
                                            <path class="cf0l8"
                                                d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z"></path>
                                        </svg>
                                        <svg class="cgfis cd4qx" width="16" height="16"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="cbnwc"
                                                d="M6.2 1C3.2 1.8 1 4.6 1 7.9 1 11.8 4.2 15 8.1 15c3.3 0 6-2.2 6.9-5.2C9.7 11.2 4.8 6.3 6.2 1Z">
                                            </path>
                                            <path class="cf0l8"
                                                d="M12.5 5a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 5Z">
                                            </path>
                                        </svg>
                                        <span class="cee2v">Switch to light / dark version</span>
                                    </label>
                                </div>
                            </div>
                            <!-- Intro -->
                            <div class="co3ns">
                                <img class="ca3bq cyj82 czi0k cev7p" src="images/mike_img.png" width="48"
                                    height="48" alt="Jordan Walker" />
                                <div class="cnwz9">
                                    <h1 class="cxqn4 ckx3g cx37a c4o0c ca1ms c7v7z">
                                        Mikael Endale
                                    </h1>
                                    <p class="cl9w0 cjnk1 cu98r">
                                        Fullstack developer, <b>Tech Entrepreneur</b> and Founder.
                                    </p>
                                </div>
                                <a class="c8j31 cu81w cqzhu c8uww ctphr c1m9b cdvd9 c5v5y c57ju ca0vo cz4g8 ceq97 c3ew3 cb1r6 cel1w cyamd cjf4f cvr54 cha6o cht5m c6x6e c7vou"
                                    href="mailto:mikaelendale00@gmail.com">Available For Work</a>
                            </div>
                            <div class="coily c2276 c37m1 cdgze">
                                <img class="c752s cev7p c88aw cs4tg ccy0p cna1y cfbgi c65hu" src="images/lalodev.png"
                                    width="245" height="160" alt="Header 01" />
                                <img class="c752s cev7p c88aw cs4tg ccy0p cna1y cfbgi c65hu" src="images/old.png"
                                    width="280" height="10" alt="Header 02" />
                                <img class="c752s cev7p c88aw cs4tg ccy0p cna1y cfbgi c65hu" src="images/learn.png"
                                    width="280" height="160" alt="Header 03" />
                            </div>
                        </header>

                        <!-- Content -->
                        <main class="cehj8 c4p6t cj2ez">
                            <!-- Experience -->
                            <section>
                                <h2 class="cragt ckx3g cuykd c045m ca1ms c7v7z">
                                    Experience
                                </h2>
                                <div class="ce075">
                                    <!-- Post #1 -->
                                    <article class="c752s c1q7e ceoke ciqjs czmrt cqd2s citpx cjmwz">
                                        <div class="cs7fr chiqp">
                                            <div
                                                class="coily cfrxt cw2a0 c9riz c8xr8 c2276 czi0k cw9ok cun1p cmlqw cf4er chc5d cop7l cebxb">
                                                <img src="images/logo.png" alt="" />
                                            </div>
                                            <div>
                                                <div class="cxozv cxrkr">
                                                    <div class="cp78t c5qvh cplrd">2023 - Today</div>
                                                    <h3 class="c045m ca1ms c7v7z">
                                                        <a class="c0t07 ciyg5 c9n2z csdx0 cg1zu"
                                                            href="https://lalodev.com" target="_blank">Senior Developer
                                                            and CEO | Lalodev</a>
                                                    </h3>
                                                    <div class="text-gray-600dark:text-gray-400 cp78t ckgk8">
                                                        Ethiopia, Addis Ababa
                                                    </div>
                                                </div>
                                                <p class="cl9w0 cjnk1 cu98r">
                                                    I lead Lalo Dev with a passion for creating
                                                    innovative, I balance coding with guiding my team to
                                                    build scalable, impactful platforms. My goal is to
                                                    be a great developer and I am still a highschool
                                                    student.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Post #2 -->
                                    <article class="c752s c1q7e ceoke ciqjs czmrt cqd2s citpx cjmwz">
                                        <div class="cs7fr chiqp">
                                            <div
                                                class="coily cfrxt cw2a0 c9riz c8xr8 c2276 czi0k cw9ok cun1p cmlqw cf4er chc5d cop7l cebxb">
                                                <img src="images/Nexus.png" alt="" />
                                            </div>
                                            <div>
                                                <div class="cxozv cxrkr">
                                                    <div class="cp78t c5qvh cplrd">2024 - 2025</div>
                                                    <h3 class="c045m ca1ms c7v7z">
                                                        <a class="c0t07 ciyg5 c9n2z csdx0 cg1zu"
                                                            href="#0">Volunteer and director of IT department |
                                                            Nexus</a>
                                                    </h3>
                                                    <div class="text-gray-600dark:text-gray-400 cp78t ckgk8">
                                                        Ethiopia Addis Ababa
                                                    </div>
                                                </div>
                                                <p class="cl9w0 cjnk1 cu98r">
                                                    As a Volunteer and Director of the IT Department at
                                                    Nexus, I oversee technology initiatives to support
                                                    the organization’s mission. I manage systems,
                                                    streamline operations, and implement innovative
                                                    solutions to drive efficiency.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Post #3 -->
                                    <article class="c752s c1q7e ceoke ciqjs czmrt cqd2s citpx cjmwz">
                                        <div class="cs7fr chiqp">
                                            <div
                                                class="coily cfrxt cw2a0 c9riz c8xr8 c2276 czi0k cw9ok cun1p cmlqw cf4er chc5d cop7l cebxb">
                                                <img src="images/alx.png" alt="" />
                                            </div>
                                            <div>
                                                <div class="cxozv cxrkr">
                                                    <div class="cp78t c5qvh cplrd">2024</div>
                                                    <h3 class="c045m ca1ms c7v7z">
                                                        <a class="c0t07 ciyg5 c9n2z csdx0 cg1zu"
                                                            href="https://alxethiopia.com">Winner of Addis Teen Code
                                                            Hackathon | ALX
                                                            Ethiopia</a>
                                                    </h3>
                                                    <div class="text-gray-600dark:text-gray-400 cp78t ckgk8">
                                                        Ethiopia, Addis Ababa
                                                    </div>
                                                </div>
                                                <p class="cl9w0 cjnk1 cu98r">
                                                    I proudly won the Addis Teen Code Hackathon hosted
                                                    by ALX Ethiopia, where I showcased creativity,
                                                    teamwork, and technical expertise. Our project stood
                                                    out, and it was a recipe website, it showed
                                                    practical impact reflecting my passion for solving
                                                    challenges through code.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="c752s c1q7e ceoke ciqjs czmrt cqd2s citpx cjmwz">
                                        <div class="cs7fr chiqp">
                                            <div
                                                class="coily cfrxt cw2a0 c9riz c8xr8 c2276 czi0k cw9ok cun1p cmlqw cf4er chc5d cop7l cebxb">
                                                <img src="images/futurex.png" alt="" />
                                            </div>
                                            <div>
                                                <div class="cxozv cxrkr">
                                                    <div class="cp78t c5qvh cplrd">2024 - 2025</div>
                                                    <h3 class="c045m ca1ms c7v7z">
                                                        <a class="c0t07 ciyg5 c9n2z csdx0 cg1zu"
                                                            href="https://www.youtube.com/watch?v=RlAGECtNgPQ">Featured
                                                            Guest | Future X Podcast</a>
                                                    </h3>
                                                    <div class="text-gray-600dark:text-gray-400 cp78t ckgk8">
                                                        Ethiopia, Addis Ababa
                                                    </div>
                                                </div>
                                                <p class="cl9w0 cjnk1 cu98r">
                                                    I had the privilege of being interviewed on the
                                                    Future X Podcast, where I shared insights on my
                                                    journey in tech, my passion for innovation, and the
                                                    projects that drive me. It was an exciting
                                                    opportunity to inspire others and discuss the future
                                                    of technology.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Post #3 -->
                                    <article class="c752s c1q7e ceoke ciqjs czmrt cqd2s citpx cjmwz">
                                        <div class="cs7fr chiqp">
                                            <div
                                                class="coily cfrxt cw2a0 c9riz c8xr8 c2276 czi0k cw9ok cun1p cmlqw cf4er chc5d cop7l cebxb">
                                                <img src="images/logo.png" alt="" />
                                            </div>
                                            <div>
                                                <div class="cxozv cxrkr">
                                                    <div class="cp78t c5qvh cplrd">2024 - today</div>
                                                    <h3 class="c045m ca1ms c7v7z">
                                                        <a class="c0t07 ciyg5 c9n2z csdx0 cg1zu"
                                                            href="https://learn.lalodev.com">
                                                            Founder of Learning Hub | Lalo Dev</a>
                                                    </h3>
                                                    <div class="text-gray-600dark:text-gray-400 cp78t ckgk8">
                                                        Ethiopia, Addis Ababa
                                                    </div>
                                                </div>
                                                <p class="cl9w0 cjnk1 cu98r">
                                                    As part of Lalo Dev, I launched Learning Hub, an
                                                    educational platform designed to empower learners
                                                    with accessible resources and tools. Through
                                                    strategic planning and execution, the platform has
                                                    generated over
                                                    <strong style="background-color: yellow">250,000 ETB</strong>
                                                    as of now, and currently January 2025 I started the
                                                    3rd round.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="c752s c1q7e ceoke ciqjs czmrt cqd2s citpx cjmwz">
                                        <div class="cs7fr chiqp">
                                            <div
                                                class="coily cfrxt cw2a0 c9riz c8xr8 c2276 czi0k cw9ok cun1p cmlqw cf4er chc5d cop7l cebxb">
                                                <img src="images/aviation.png" alt="" />
                                            </div>
                                            <div>
                                                <div class="cxozv cxrkr">
                                                    <div class="cp78t c5qvh cplrd">Dec, 2023</div>
                                                    <h3 class="c045m ca1ms c7v7z">
                                                        <a class="c0t07 ciyg5 c9n2z csdx0 cg1zu"
                                                            href="#0">Participant | Aviation 2023 Expo, Hosted by
                                                            Ethiopian Airlines</a>
                                                    </h3>
                                                    <div class="text-gray-600dark:text-gray-400 cp78t ckgk8">
                                                        Ethiopia, Addis Ababa
                                                    </div>
                                                </div>
                                                <p class="cl9w0 cjnk1 cu98r">
                                                    I had the honor of participating in the Aviation
                                                    2023 Expo, hosted by Ethiopian Airlines. This event
                                                    allowed me to engage with industry leaders, explore
                                                    aviation technologies, and contribute to discussions
                                                    on the future of the aviation sector.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <!-- Post #3 -->
                                    <article class="c752s c1q7e ceoke ciqjs czmrt cqd2s citpx cjmwz">
                                        <div class="cs7fr chiqp">
                                            <div
                                                class="coily cfrxt cw2a0 c9riz c8xr8 c2276 czi0k cw9ok cun1p cmlqw cf4er chc5d cop7l cebxb">
                                                <img src="images/bits.png" alt="" />
                                            </div>
                                            <div>
                                                <div class="cxozv cxrkr">
                                                    <div class="cp78t c5qvh cplrd">Oct, 2024</div>
                                                    <h3 class="c045m ca1ms c7v7z">
                                                        <a class="c0t07 ciyg5 c9n2z csdx0 cg1zu"
                                                            href="https://alxethiopia.com">3rd Place | BITS College
                                                            Hackathon</a>
                                                    </h3>
                                                    <div class="text-gray-600dark:text-gray-400 cp78t ckgk8">
                                                        Ethiopia, Addis Ababa
                                                    </div>
                                                </div>
                                                <p class="cl9w0 cjnk1 cu98r">
                                                    As a high school student, I proudly secured 3rd
                                                    place in the BITS College Hackathon, competing
                                                    against university students. This experience was a
                                                    great opportunity to challenge myself, showcase my
                                                    skills, and collaborate on innovative solutions,
                                                    proving that age is no barrier to success in tech.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="c752s c1q7e ceoke ciqjs czmrt cqd2s citpx cjmwz">
                                        <div class="cs7fr chiqp">
                                            <div
                                                class="coily cfrxt cw2a0 c9riz c8xr8 c2276 czi0k cw9ok cun1p cmlqw cf4er chc5d cop7l cebxb">
                                                <img src="images/meta.png" alt="" />
                                            </div>
                                            <div>
                                                <div class="cxozv cxrkr">
                                                    <div class="cp78t c5qvh cplrd">Nov, 2022</div>
                                                    <h3 class="c045m ca1ms c7v7z">
                                                        <a class="c0t07 ciyg5 c9n2z csdx0 cg1zu"
                                                            href="#0">Attendee | "My Digital World" Course by Meta
                                                            &
                                                            KEMMCOM</a>
                                                    </h3>
                                                    <div class="text-gray-600dark:text-gray-400 cp78t ckgk8">
                                                        Ethiopia, Addis Ababa
                                                    </div>
                                                </div>
                                                <p class="cl9w0 cjnk1 cu98r">
                                                    I attended the "My Digital World" course, offered by
                                                    Meta and Kemmcom, which explored the impacts of
                                                    social media. This course provided valuable insights
                                                    into how digital platforms shape society and
                                                    influence communication, empowering me to better
                                                    navigate and understand the digital landscape.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </section>

                            <!-- Projects -->
                            <section>
                                <h2 class="cragt ckx3g cuykd c045m ca1ms c7v7z">Projects</h2>
                                <div class="ce075">
                                    <!-- Post #1 -->
                                    <article class="cu81w c752s c1q7e ceoke ciqjs czmrt cdgze cqd2s citpx cjmwz">
                                        <div class="ciobu cl22f c5zah cn1lv c88aw c4s0r cn899 caf15 c62sf"
                                            aria-hidden="true">
                                            <svg class="csx92 cfsq7 cotl8" xmlns="http://www.w3.org/2000/svg"
                                                width="10" height="10">
                                                <path
                                                    d="M1.018 10 0 8.983l7.572-7.575H1.723L1.736 0H10v8.266H8.577l.013-5.841L1.018 10Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="czq8f cxrkr">
                                            <div style="color: green; font-weight: 600"
                                                class="cp78t ckgk8 cjnk1 cu98r">
                                                #Done
                                            </div>
                                            <h3 class="c045m ca1ms c7v7z">
                                                <a class="c5v5y c57ju" href="https://lalodev.com"
                                                    target="_blank">Lalo Dev Landing Page & Developer Page</a>
                                            </h3>
                                        </div>
                                        <p class="cl9w0 cjnk1 cu98r">
                                            The Lalo Dev Landing Page introduces visitors to the
                                            platform with a clean, user-friendly design, featuring
                                            key offerings and clear calls to action. The Developer
                                            Page showcases the technical side of Lalo Dev,
                                            highlighting the tech stack, development process, and
                                            projects.
                                        </p>
                                    </article>
                                    <!-- Post #2 -->
                                    <article class="cu81w c752s c1q7e ceoke ciqjs czmrt cdgze cqd2s citpx cjmwz">
                                        <div class="ciobu cl22f c5zah cn1lv c88aw c4s0r cn899 caf15 c62sf"
                                            aria-hidden="true">
                                            <svg class="csx92 cfsq7 cotl8" xmlns="http://www.w3.org/2000/svg"
                                                width="10" height="10">
                                                <path
                                                    d="M1.018 10 0 8.983l7.572-7.575H1.723L1.736 0H10v8.266H8.577l.013-5.841L1.018 10Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="czq8f cxrkr">
                                            <div style="color: green; font-weight: 600"
                                                class="cp78t ckgk8 cjnk1 cu98r">
                                                #Done
                                            </div>
                                            <h3 class="c045m ca1ms c7v7z">
                                                <a class="c5v5y c57ju">Domain Management System | Lalo Dev</a>
                                            </h3>
                                        </div>
                                        <p class="cl9w0 cjnk1 cu98r">
                                            The Domain Management System at Lalo Dev helps manage
                                            everything under the platform, from Learning Hub and
                                            blog pages to community spaces and course materials. It
                                            makes it easy to update, organize, and keep everything
                                            running smoothly across the site, ensuring a great
                                            experience for both users and admins.
                                        </p>
                                    </article>
                                    <!-- Post #3 -->
                                    <article class="cu81w c752s c1q7e ceoke ciqjs czmrt cdgze cqd2s citpx cjmwz">
                                        <div class="ciobu cl22f c5zah cn1lv c88aw c4s0r cn899 caf15 c62sf"
                                            aria-hidden="true">
                                            <svg class="csx92 cfsq7 cotl8" xmlns="http://www.w3.org/2000/svg"
                                                width="10" height="10">
                                                <path
                                                    d="M1.018 10 0 8.983l7.572-7.575H1.723L1.736 0H10v8.266H8.577l.013-5.841L1.018 10Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="czq8f cxrkr">
                                            <div style="color: green; font-weight: 600"
                                                class="cp78t ckgk8 cjnk1 cu98r">
                                                #Done
                                            </div>
                                            <h3 class="c045m ca1ms c7v7z">
                                                <a class="c5v5y c57ju" href="#0">Lalo Dev Learning Hub</a>
                                            </h3>
                                        </div>
                                        <p class="cl9w0 cjnk1 cu98r">
                                            The Lalo Dev Learning Hub offers a range of courses and
                                            resources to help users upskill. Now in its 3rd round
                                            Jan 25/2025, the platform has already generated over
                                            <strong style="background-color: yellow">250,000 ETB</strong>
                                            as of now , making a positive impact on learners and the
                                            community.
                                        </p>
                                    </article>
                                    <!-- Post #2 -->
                                    <article class="cu81w c752s c1q7e ceoke ciqjs czmrt cdgze cqd2s citpx cjmwz">
                                        <div class="ciobu cl22f c5zah cn1lv c88aw c4s0r cn899 caf15 c62sf"
                                            aria-hidden="true">
                                            <svg class="csx92 cfsq7 cotl8" xmlns="http://www.w3.org/2000/svg"
                                                width="10" height="10">
                                                <path
                                                    d="M1.018 10 0 8.983l7.572-7.575H1.723L1.736 0H10v8.266H8.577l.013-5.841L1.018 10Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="czq8f cxrkr">
                                            <div style="color: rgb(175, 175, 71); font-weight: 600"
                                                class="cp78t ckgk8 cjnk1 cu98r">
                                                #ongoing
                                            </div>
                                            <h3 class="c045m ca1ms c7v7z">
                                                <a class="c5v5y c57ju">StudMind</a>
                                            </h3>
                                        </div>
                                        <p class="cl9w0 cjnk1 cu98r">
                                            StudMind is an ongoing SaaS project focused on using AI
                                            to enhance the study experience. It leverages artificial
                                            intelligence to provide personalized learning paths,
                                            study materials, and smart tools to help students study
                                            more effectively and efficiently.
                                        </p>
                                    </article>
                                    <!-- Post #3 -->
                                    <article class="cu81w c752s c1q7e ceoke ciqjs czmrt cdgze cqd2s citpx cjmwz">
                                        <div class="ciobu cl22f c5zah cn1lv c88aw c4s0r cn899 caf15 c62sf"
                                            aria-hidden="true">
                                            <svg class="csx92 cfsq7 cotl8" xmlns="http://www.w3.org/2000/svg"
                                                width="10" height="10">
                                                <path
                                                    d="M1.018 10 0 8.983l7.572-7.575H1.723L1.736 0H10v8.266H8.577l.013-5.841L1.018 10Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="czq8f cxrkr">
                                            <div style="color: rgb(175, 175, 71); font-weight: 600"
                                                class="cp78t ckgk8 cjnk1 cu98r">
                                                #ongoing
                                            </div>
                                            <h3 class="c045m ca1ms c7v7z">
                                                <a class="c5v5y c57ju" href="#0">Quantum Chat</a>
                                            </h3>
                                        </div>
                                        <p class="cl9w0 cjnk1 cu98r">
                                            Quantum Chat is an ongoing project using quantum
                                            cryptography to create a super-secure messaging
                                            platform. It’s designed to keep your conversations safe
                                            and private, with extraordinary encryption technology.
                                        </p>
                                    </article>
                                    <!-- Post #2 -->
                                    <article class="cu81w c752s c1q7e ceoke ciqjs czmrt cdgze cqd2s citpx cjmwz">
                                        <div class="ciobu cl22f c5zah cn1lv c88aw c4s0r cn899 caf15 c62sf"
                                            aria-hidden="true">
                                            <svg class="csx92 cfsq7 cotl8" xmlns="http://www.w3.org/2000/svg"
                                                width="10" height="10">
                                                <path
                                                    d="M1.018 10 0 8.983l7.572-7.575H1.723L1.736 0H10v8.266H8.577l.013-5.841L1.018 10Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="czq8f cxrkr">
                                            <div style="color: rgb(175, 175, 71); font-weight: 600"
                                                class="cp78t ckgk8 cjnk1 cu98r">
                                                #ongoing
                                            </div>
                                            <h3 class="c045m ca1ms c7v7z">
                                                <a class="c5v5y c57ju">Smart Payment Integration</a>
                                            </h3>
                                        </div>
                                        <p class="cl9w0 cjnk1 cu98r">
                                            Smart Payment Integration is a secret project that uses
                                            quantum encryption to ensure secure and private
                                            transactions. It’s designed to provide a highly secure,
                                            seamless payment experience, prioritizing privacy and
                                            data protection.
                                        </p>
                                    </article>
                                    <!-- Post #3 -->
                                    <article class="cu81w c752s c1q7e ceoke ciqjs czmrt cdgze cqd2s citpx cjmwz">
                                        <div class="ciobu cl22f c5zah cn1lv c88aw c4s0r cn899 caf15 c62sf"
                                            aria-hidden="true">
                                            <svg class="csx92 cfsq7 cotl8" xmlns="http://www.w3.org/2000/svg"
                                                width="10" height="10">
                                                <path
                                                    d="M1.018 10 0 8.983l7.572-7.575H1.723L1.736 0H10v8.266H8.577l.013-5.841L1.018 10Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="czq8f cxrkr">
                                            <div style="color: rgb(175, 175, 71); font-weight: 600"
                                                class="cp78t ckgk8 cjnk1 cu98r">
                                                #ongoing
                                            </div>
                                            <h3 class="c045m ca1ms c7v7z">
                                                <a class="c5v5y c57ju" href="#0">ERP School Management System</a>
                                            </h3>
                                        </div>
                                        <p class="cl9w0 cjnk1 cu98r">
                                            The ERP School Management System is an ongoing project
                                            built by a dedicated team, designed to streamline school
                                            operations. It covers everything from student records
                                            and grades to class schedules, making school management
                                            more efficient and organized.
                                        </p>
                                    </article>
                                </div>
                            </section>

                            <!-- Side Hustles -->
                            <section>
                                <h2 class="cragt ckx3g cuykd c045m ca1ms c7v7z">
                                    Side Hustles
                                </h2>
                                <div class="c1hft c37m1 cbi4k">
                                    <!-- Post #1 -->
                                    <article class="cu81w c752s c1q7e ceoke ciqjs czmrt cdgze cqd2s citpx cjmwz">
                                        <div class="ciobu cl22f c5zah cn1lv c88aw c4s0r cn899 caf15 c62sf"
                                            aria-hidden="true"></div>
                                        <div
                                            class="ca3bq coily cj7hi c72v2 c8xr8 c2276 czi0k cw9ok cun1p cmlqw csjzu cf4er chc5d">
                                            <img src="https://cdn0.iconfinder.com/data/icons/business-finance-hexagon/128/14-256.png"
                                                alt="" />
                                        </div>
                                        <div class="ce075">
                                            <h3 class="c045m ca1ms c7v7z">
                                                <a class="c5v5y c57ju" href="">Tech Consulting for Startups</a>
                                            </h3>
                                            <p class="cl9w0 cjnk1 cu98r">
                                                Offer consulting services to new businesses or fellow
                                                students looking to build apps, websites, or tech
                                                solutions
                                            </p>
                                        </div>
                                    </article>
                                    <!-- Post #2 -->
                                    <article class="cu81w c752s c1q7e ceoke ciqjs czmrt cdgze cqd2s citpx cjmwz">
                                        <div class="ciobu cl22f c5zah cn1lv c88aw c4s0r cn899 caf15 c62sf"
                                            aria-hidden="true"></div>
                                        <div
                                            class="ca3bq coily cj7hi c72v2 c8xr8 c2276 czi0k cw9ok cun1p cmlqw csjzu cf4er chc5d">
                                            <img src="https://cdn1.iconfinder.com/data/icons/business-700/48/Candle_Sticks-512.png"
                                                alt="" />
                                        </div>
                                        <div class="ce075">
                                            <h3 class="c045m ca1ms c7v7z">
                                                <a class="c5v5y c57ju" href="">Forex Trading.</a>
                                            </h3>
                                            <p class="cl9w0 cjnk1 cu98r">
                                                I explore the world of FX Trading, where I analyze
                                                currency markets and trade different currency pairs
                                            </p>
                                        </div>
                                    </article>
                                </div>
                            </section>
                            <section>
                                <h2 style="color: rgb(172, 165, 125)" class="cragt ckx3g cuykd c045m ca1ms c7v7z">
                                    Education
                                </h2>
                                <div class="ce075">
                                    <!-- Post #1 -->
                                    <article class="c752s c1q7e ceoke ciqjs czmrt cqd2s citpx cjmwz">
                                        <div class="cs7fr chiqp">
                                            <div
                                                class="coily cfrxt cw2a0 c9riz c8xr8 c2276 czi0k cw9ok cun1p cmlqw csjzu cf4er chc5d cop7l cebxb">
                                                <img src="images/lebawi.png" alt="" />
                                            </div>
                                            <div>
                                                <div class="cxozv cxrkr">
                                                    <div class="cp78t c5qvh cplrd">2020 - Today</div>
                                                    <h3 class="c045m ca1ms c7v7z">
                                                        <a class="c0t07 ciyg5 c9n2z csdx0 cg1zu"
                                                            href="#0">Highschool Student | Lebawi International
                                                            Academy</a>
                                                    </h3>
                                                    <div class="text-gray-600dark:text-gray-400 cp78t ckgk8">
                                                        Ethiopia, Addis Ababa
                                                    </div>
                                                </div>
                                                <p class="cl9w0 cjnk1 cu98r">
                                                    I am currently a Grade 11 Natural Science student at
                                                    Lebawi Academy, where I am expanding my knowledge in
                                                    science and technology while balancing my passion
                                                    for tech projects and side hustles.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </section>
                            <h1 style="text-align: center" class="cl9w0 cjnk1 cu98r">
                                "Building the future, one innovation at a time." <br />
                                <span style="text-align: end">me 😁</span>
                            </h1>
                        </main>
                        <!-- Footer -->
                        <footer class="c4p6t ck1og cpi2s">
                            <!-- Initials logo -->
                            <div class="signature-container">
                                <!-- Light Mode Signature -->
                                <img src="images/signature.png" class="cyj82 cal0l cfs63 signature-light"
                                    alt="Light Mode Signature" />

                                <!-- Dark Mode Signature -->
                                <img src="images/signature_white.png" class="cyj82 cal0l cfs63 signature-dark"
                                    alt="Dark Mode Signature" />
                            </div>

                            <div class="cqduh">
                                <!-- Social icons -->
                                <ul class="cyj82 c37m1">
                                    <li>
                                        <a class="coily c8per cor69 c8xr8 c2276 czi0k   cun1p cmlqw cjnk1 csjzu cw7qc ccjug cf4er chc5d cu98r cns9e"
                                            href="#0" aria-label="X">
                                            <svg class="csx92" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 496 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                <path
                                                    d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="coily c8per cor69 c8xr8 c2276 czi0k   cun1p cmlqw cjnk1 csjzu cw7qc ccjug cf4er chc5d cu98r cns9e"
                                            href="#0" aria-label="GitHub">
                                            <svg class="csx92" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                <path
                                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="coily c8per cor69 c8xr8 c2276 czi0k   cun1p cmlqw cjnk1 csjzu cw7qc ccjug cf4er chc5d cu98r cns9e"
                                            href="#0" aria-label="Facebook">
                                            <svg class="csx92" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                <path
                                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="coily c8per cor69 c8xr8 c2276 czi0k   cun1p cmlqw cjnk1 csjzu cw7qc ccjug cf4er chc5d cu98r cns9e"
                                            href="#0" aria-label="Facebook">
                                            <svg class="csx92" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 496 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                <path
                                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                            </svg>
                                        </a>
                                    </li> 
                                </ul>
                                <!-- Copyright notes -->
                                <p class="cl9w0 cn1lv caf15">
                                    © Mikael Endale. All rights reserved.
                                </p>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/vendors/alpinejs.min.js') }}" defer=""></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
