<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Topic/about page - brief description and history about the APNG file format">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="Tharin Sandipa, Uttam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../Images/APNGLogoNoBackground.png">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="import" href="'https://fonts.googleapis.com/css?family=Rubik:700&display=swap'">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <title>Animated Portable Network Graphics</title>
</head>

<body>
    <?php
    // Setting which page should show as active
    $activePage = "topic";   
    include("menu.inc") 
    ?>
    <main>

        <br><br><br><br>
        <?php include("header.inc") ?>
        <section>
            <fieldset class="fieldset-settings general-settings">
                <h2 class="font-general headings">A Brief History on Animated Portable Network Graphics(APNG) - </h2>
                <aside>
                    <figure class="figure">
                        <img class="Moz" src="../Images/mozilla_logo.png" alt="Mozilla Logo">
                        <figurecaption>
                            <a class="link" href="https://en.m.wikipedia.org/wiki/File:Mozilla_logo.svg">Source: Mozilla Logo</a>
                        </figurecaption>
                    </figure>
                </aside>
                <p class="font-general paragraph">Animated Portable Networks Graphics also known as (APNG) was first created in 2004 by <a href="https://www.linkedin.com/in/stuartparmenter" class="author"><em class="author">Stuart Parmenter</em></a> and <a href="https://www.linkedin.com/in/vukicevic"
                    class="author"><em class="author">Vladimir Vukićević</em></a> of the <a href="https://en.wikipedia.org/wiki/Mozilla_Corporation" class="author"><em class="author">Mozilla Coropration</em></a> to store animations needed for interfaces
                    like throbbers (which are also known as loading icons). APNG&acute;s file format is a variation of the PNG file format that allows you to play a succession of PNG images. APNG also supports colour depths of 24 bits and transparency
                    levels of 8 bits. The APNG file format is currently less popular than GIFs because many web browsers and programmes do not support it, in which case browsers will only display the first frame, as well as files that are larger than
                    GIF files, this is a disadvantage since the files will hog the user bandwidth. <br>Similar file formats to APNG include:</p>
                    <ol>
                        <li class="font-general">Graphics Interchange Format (GIF) is one of the earliest file formats. Although it lacks alpha transparency, it supports 8-bit colour and is one of the most popular animated picture file formats.</li>
                        <li class="font-general">WebP was first developed in 2010 by Google. WebP has similar features to APNG including 24-bit colour and 8-bit transparency, as well as lossy and lossless compression, which allows for minimal file sizes whilst also maintaining excellent
                            quality.
                        </li>
                    </ol>
                </fieldset>

            </section>
            <br><br>
            <section class="general-settings">
                <fieldset class="fieldset-settings grid-section-container">
                    <h2 class="font-general headings grid-section-item1">APNG File Format - </h2>
                    <p class="paragraph font-general grid-section-item2">APNG files are stored in a binary format. It follows PNG specifications which seperate data into segments called chunks, and also introduces new chunks. :- </p>
                    <div class="grid-section-item3">
                        <table class="table-border table-mobile">
                            <tr>
                                <th class="table-border font-general table-fx">PNG Signature</th>
                                <th class="table-border font-general table-fx">IHDR (PNG Header)</th>
                                <th class="table-border font-general table-fx">acTL</th>
                                <th class="table-border font-general color-r">fcTL</th>
                                <th class="table-border font-general color-r">IDAT (First PNG Image)</th>
                                <th class="table-border font-general color-g">fcTL</th>
                                <th class="table-border font-general color-g">fdAT</th>
                                <th class="table-border font-general color-b">fcTL</th>
                                <th class="table-border font-general color-b">fdAT</th>
                                <th class="table-border font-general table-fx">IEND (End Block)</th>
                            </tr>
                            <tr>
                                <td class="table-border font-general table-fx"></td>
                                <td class="table-border font-general table-fx"></td>
                                <td class="table-border font-general table-fx"></td>
                                <td class="table-border font-general color-r" colspan="2">Frame 1</td>
                                <td class="table-border font-general color-g" colspan="2">Frame 2</td>
                                <td class="table-border font-general color-b" colspan="2">Frame 3</td>
                                <td class="table-border font-general table-fx"></td>
                            </tr>
                        </table>
                        <figcaption>
                            <a class="font-general Link" href="https://docs.fileformat.com/image/apng/#apng-file-format">Source: APNG File Format</a>
                        </figcaption>
                    </div>

                    <br>
                    <ul class="grid-section-item4">
                        <li class="font-general">Animation Control Chunk (acTL) - Indicates that this file is an animated PNG.</li>
                        <li class="font-general">Frame Control Chunk (fcTL) - Signifies the start of each frame and holds metadata such as resolution, transparency etc..</li>
                        <li class="font-general">Frame Data Chunk (fdAT) - Stores the frames content.</li>

                    </ul>
                </fieldset>
            </section>
            <br><br>
            <section class="general-settings">
                <fieldset class="fieldset-settings">
                    <h2 class="font-general headings">Which browsers support APNGs - </h2>
                    <p class="paragraph font-general">The following table shows the support for APNGs in the most popular browsers for both desktop and mobile devices.</p>
                    <div class="grid-table-container">
                        <h3 class="font-general grid-table-item1">Desktop - </h3>
                        <table class="table-border table-general table-mobile grid-table-item3">
                            <tr>
                                <th class="table-border font-general table-fx">Browser(s)</th>
                                <th class="table-border font-general color-r">Chrome</th>
                                <th class="table-border font-general color-r">FireFox</th>
                                <th class="table-border font-general color-r">Edge</th>
                                <th class="table-border font-general color-r">Opera</th>
                                <th class="table-border font-general color-r">Safari</th>
                            </tr>
                            <tr>
                                <td class="table-border font-general table-fx">Version</td>
                                <td class="table-border font-general color-g">Version 100</td>
                                <td class="table-border font-general color-g">Version 98</td>
                                <td class="table-border font-general color-g">Version 99</td>
                                <td class="table-border font-general color-g">Version 83</td>
                                <td class="table-border font-general color-g">Version 15.4</td>
                            </tr>
                            <tr>
                                <td class="table-border font-general table-fx">Release Date</td>
                                <td class="table-border font-general color-b">March 29th, 2022</td>
                                <td class="table-border font-general color-b">March 8th, 2022</td>
                                <td class="table-border font-general color-b">March 3rd, 2022</td>
                                <td class="table-border font-general color-b">January 19th, 2022</td>
                                <td class="table-border font-general color-b">March 14th, 2022</td>
                            </tr>
                        </table>
                        <br>
                        <h3 class="font-general grid-table-item2">Mobile - </h3>
                        <table class="table-border table-general table-mobile grid-table-item4">
                            <tr>
                                <th class="table-border font-general table-fx">Browser(s)</th>
                                <th class="table-border font-general color-r">Chrome for Android</th>
                                <th class="table-border font-general color-r">FireFox for Android</th>
                                <th class="table-border font-general color-r">Android Web Browser</th>
                                <th class="table-border font-general color-r">Opera Mobile</th>
                                <th class="table-border font-general color-r">Safari IOS</th>
                            </tr>
                            <tr>
                                <td class="table-border font-general table-fx">Version</td>
                                <td class="table-border font-general color-g">Version 99</td>
                                <td class="table-border font-general color-g">Version 96</td>
                                <td class="table-border font-general color-g">Version 99</td>
                                <td class="table-border font-general color-g">Version 64</td>
                                <td class="table-border font-general color-g">Version 15.4</td>
                            </tr>
                            <tr>
                                <td class="table-border font-general table-fx">Release Date</td>
                                <td class="table-border font-general color-b">January 11th, 2022</td>
                                <td class="table-border font-general color-b">March 8th, 2022</td>
                                <td class="table-border font-general color-b">March 1st, 2022</td>
                                <td class="table-border font-general color-b">Febuary 16th, 2022</td>
                                <td class="table-border font-general color-b">March 14th, 2022</td>
                            </tr>
                        </table>
                    </div>
                </fieldset>
            </section>
            <br><br><br><br>
        </main>
        <?php include("footer.inc") ?>
    </body>

    </html>