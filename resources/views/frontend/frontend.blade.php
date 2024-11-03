@include('layout.layout')


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        /* header */



        .profile-card {
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.07);
            margin-top: 17px;

            max-width: 100%;
            padding: 43px 66px 106px;
            border: 1px solid #e3e4e6;


        }

        @media (max-width: 991px) {
            .profile-card {
                padding: 0 20px 100px;
            }
        }

        .profile-content {
            gap: 20px;
            display: flex;
        }

        @media (max-width: 991px) {
            .profile-content {
                flex-direction: column;
                align-items: stretch;
                gap: 0;
            }
        }

        .profile-info {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 73%;
            margin-left: 0;
        }

        @media (max-width: 991px) {
            .profile-info {
                width: 100%;
            }
        }

        .profile-header {
            display: flex;
            margin-top: 9px;
            width: 100%;
            flex-direction: column;
        }

        @media (max-width: 991px) {
            .profile-header {
                margin-top: 40px;
            }
        }

        .profile-title {
            display: flex;
            gap: 22px;
            font-family: Tajawal, sans-serif;
            text-align: center;
        }

        .badge {
            border-radius: 2px;
            background-color: #f8c614;
            align-self: start;
            display: flex;
            gap: 5px;
            font-size: 10px;
            color: #000;
            font-weight: 700;
            padding: 1px 7px;
        }

        .badge-icon {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 16px;
        }

        .profile-name {
            color: #000434;
            font-size: 28px;
            font-weight: 800;
            flex-grow: 1;
            width: 198px;
            margin-left: 710px;
        }

        .profile-details {
            align-self: end;
            display: flex;
            margin-top: 13px;
            width: 167px;
            max-width: 100%;
            flex-direction: column;
            font-family: Inter, sans-serif;
            font-weight: 400;
        }

        @media (max-width: 991px) {
            .profile-details {
                margin-right: 10px;
            }
        }

        .job-title {
            color: #a7acb1;
            font-size: 20px;
            text-align: center;
        }

        @media (max-width: 991px) {
            .job-title {
                margin-right: 3px;
            }
        }

        .stats {
            display: flex;
            margin-top: 26px;
            gap: 20px;
            color: #000434;
        }

        .projects {
            display: flex;
            gap: 7px;
            font-size: 15px;
            text-align: center;
        }

        .project-count {
            flex-grow: 1;
        }

        .stats-icon {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 20px;
        }

        .location {
            display: flex;
            font-size: 14px;
            white-space: nowrap;
            text-align: right;
        }

        @media (max-width: 991px) {
            .location {
                white-space: initial;
            }
        }

        .country {
            flex-grow: 1;
        }

        .profile-image-wrapper {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 27%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .profile-image-wrapper {
                width: 100%;
            }
        }

        .profile-image {
            aspect-ratio: 1.03;
            object-fit: contain;
            object-position: center;
            width: 122px;
            border-radius: 237px;
            max-width: 100%;
            flex-grow: 1;
        }

        @media (max-width: 991px) {
            .profile-image {
                margin-top: 40px;
            }
        }

        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .profile-section {
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.07);
            display: flex;
            margin-top: 9px;

            max-width: 1364px;
            align-items: center;
            gap: 24px;
            text-align: center;
            flex-wrap: wrap;
            padding: 0 16px 0 80px;
            font: 500 18px Inter, sans-serif;
            max-width: 100%;
            border: 1px solid #e3e4e6;
            justify-content: flex-end;
            margin-bottom: 5px;
        }

        @media (max-width: 991px) {
            .profile-section {
                padding-left: 20px;
            }
        }

        .ratings-container {
            align-self: stretch;
            display: flex;
            gap: 10px;
            color: #000434;
            white-space: nowrap;
            margin: auto 0;
        }

        @media (max-width: 991px) {
            .ratings-container {
                white-space: initial;
            }
        }

        .icon {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 25px;
        }

        .packages-container {
            align-self: stretch;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .packages-button {
            border-radius: 8px;
            background-color: #edf5ff;
            align-self: stretch;
            display: flex;
            gap: 12px;
            color: #3d96fc;
            padding: 14px 18px;
            border: none;
        }

        @media (max-width: 991px) {
            .packages-button {
                padding-left: 20px;
            }
        }

        .packages-text {
            flex-grow: 1;
        }

        .portfolio-text {
            color: #000434;
            align-self: stretch;
            flex-basis: auto;
            margin: auto 0;
        }

        .profile-container {
            align-self: stretch;
            display: flex;
            gap: 11px;
            font-family: Tajawal, sans-serif;
            color: #000434;
            margin: auto 0;
        }

        .profile-text {
            flex-grow: 1;
            margin: auto 0;
        }

        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .image-model-container {
            border-radius: 8px;
            background-color: #e4f1ff;
            display: flex;
            flex-grow: 1;
            flex-direction: column;
            color: #000434;
            text-align: right;
            width: 100%;
            padding: 328px 0 747px;
            font: 20px Tajawal, sans-serif;
        }

        .image-model-title {
            font-weight: 500;
            align-self: flex-end;
            margin-right: 35px;
            margin-top: 160px;
        }

        .image-model-description {
            font-weight: 400;
        }

        .work-cover-title {
            font-weight: 500;
            align-self: flex-end;
            margin-top: 472px;
        }

        .work-cover-description {
            font-weight: 400;
            /* margin-top: 350px; */
        }

        .skills-title {
            font-weight: 500;
            align-self: flex-end;
            margin-top: 452px;
        }

        .skills-description {
            margin: 9px 10px 0 0;
        }

        .work-description-title {
            font-weight: 500;
            align-self: flex-end;
            margin-top: 91px;
        }

        .work-description-content {
            font-weight: 400;
            margin: 9px 35px 0;
        }

        .content-wrapper {
            display: flex;
            margin-top: 9px;
            flex-direction: column;
            padding: 0 25px 0 50px;
        }

        .skills-wrapper {
            display: flex;
            margin-top: 9px;
            flex-direction: column;
            font-weight: 400;
            padding: 0 47px;
        }

        @media (max-width: 991px) {
            .image-model-container {
                margin-top: 31px;
                padding: 100px 0;
            }

            .image-model-title,
            .work-cover-title,
            .skills-title,
            .work-description-title {
                margin-right: 10px;
            }

            .content-wrapper,
            .skills-wrapper {
                padding: 0 20px;
            }

            .work-cover-title,
            .skills-title,
            .work-description-title {
                margin-top: 40px;
            }

            .skills-description {
                margin-left: 7px;
            }

            .work-description-content {
                margin: 0 10px;
            }
        }

        /* Main container */
        .main-container {
            display: flex;
            flex-wrap: wrap;
            /* gap: 20px; */

            border: 1px solid black;
        }

        /* Left side - image model container */
        .image-model-container {
            border-radius: 8px;
            background-color: #e4f1ff;
            color: #000434;
            font: 20px Tajawal, sans-serif;
            width: 100%;
            padding: 50px 20px;
            flex: 1;
        }

        .image-model-title {
            font-weight: 500;
            text-align: left;
        }

        .content-wrapper,
        .skills-wrapper {
            padding: 20px 0;
        }

        .work-cover-title,
        .skills-title,
        .work-description-title {
            font-weight: 500;
            margin-top: 350px;
        }

        .work-cover-description,
        .skills-description,
        .work-description-content {
            font-weight: 400;
        }

        /* Right side - upload section */
        .upload-section {
            align-self: start;
            display: flex;
            flex-direction: column;
            width: 75%;
            max-width: 100%;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
        }

        /* Progress bar */


        .progresss-bar {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background-color: white;
            flex-direction: row;
            justify-content: center;
        }

        .step-circle {
            background-color: #f9fafb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
        }

        .step-inner-circle {
            background-color: #e5e7eb;
            border-radius: 50%;
            width: 16px;
            height: 16px;
        }

        .progress-line {
            background-color: #2076bf;
            width: 135px;
            height: 3px;
        }

        .active-step {
            background-color: #badef9;
        }

        .active-inner-circle {
            background-color: #0f6cba;
        }

        .step-titles {
            display: flex;
            justify-content: space-evenly;
            margin-top: 10px;
            font: 700 12px Tajawal, sans-serif;
        }

        .upload-instruction {
            color: #000;
            text-align: center;
            margin: 20px 0;
            font: 400 20px ABeeZee, sans-serif;
            margin-left: auto;
        }

        .upload-area {
            border-radius: 11px;
            color: #000;
            text-align: center;
            padding: 30px 20px;
            font: 400 20px ABeeZee, sans-serif;
            border: 1px dashed #3d96fc;
            margin-bottom: 20px;
            width: 440px;
            height: 154px;
            margin-left: auto;
        }

        .upload-requirements,
        .image-dimensions,
        .max-images {
            color: #696b6d;
            text-align: right;
            font: 400 16px ABeeZee, sans-serif;
            margin-top: 10px;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .main-container {
                flex-direction: column;
            }

            .image-model-container,
            .upload-section {
                width: 100%;
            }

            .upload-section {
                margin-top: 20px;
            }
        }

        .required {
            color: #ff0909;
        }

        .image-upload-area {
            border-radius: 11px;
            margin-top: 20px;
            color: #000434;
            text-align: center;
            padding: 65px 26px;
            font: 400 20px ABeeZee, sans-serif;
            border: 1px dashed #3d96fc;
        }

        .browse-link {
            color: #3d96fc;
        }

        .preview-container {
            border-radius: 11px;
            background-color: #ffffff;
            display: flex;
            margin-top: 29px;
            width: 353px;
            max-width: 100%;
            height: 292px;
            border: 1px solid #e5e5e5;
        }

        .skills-title {
            color: #000434;
            text-align: center;
            margin-top: 66px;
            font: 500 20px Tajawal, sans-serif;
        }

        .skills-input {
            border-radius: 4px;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: 9px 19px;
            align-self: stretch;
            display: flex;
            margin-top: 24px;
            width: 445px;
            margin-left: auto;
            border: 1px solid #b1b1b1;
        }

        .skills-icon {
            aspect-ratio: 1;
            object-fit: contain;
            object-position: center;
            width: 28px;
            border-radius: 36px;
        }

        .description-title {
            color: #000434;
            text-align: right;
            margin-top: 49px;
            font: 500 20px Tajawal, sans-serif;
        }

        .description-input {
            border-radius: 4px;
            align-self: stretch;
            display: flex;
            margin-top: 24px;
            width: 632px;
            height: 326px;
            border: 1px solid #b1b1b1;
            margin-left: auto;
        }

        @media (max-width: 991px) {
            .project-details {
                margin: 40px 10px 0 0;
            }

            .image-upload-area {
                max-width: 100%;
                padding: 0 20px;
            }

            .skills-title,
            .description-title {
                margin: 40px 10px 0 0;
            }

            .skills-input,
            .description-input {
                margin-right: 10px;
            }

            .skills-input {
                padding-right: 20px;
            }
        }

        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .action-buttons {
            display: flex;
            margin-top: 134px;
            width: 310px;
            max-width: 100%;
            gap: 20px;
            white-space: nowrap;
            text-align: center;
            justify-content: space-between;
            font: 700 18px Tajawal, sans-serif;
        }

        .next-button {
            border-radius: 11px;
            background-color: #3d96fc;
            color: #fff;
            padding: 13px 31px;
        }

        .cancel-button {
            border-radius: 11px;
            color: #000434;
            padding: 16px 31px;
            border: 1px solid #eee;
        }

        @media (max-width: 991px) {
            .action-buttons {
                margin-top: 40px;
                white-space: initial;
            }

            .next-button,
            .cancel-button {
                white-space: initial;
                padding: 0 20px;
            }
        }

        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        ul {
            list-style-position: inside;
            /* Keeps the bullet inside the content box */
            padding: 0;
            margin: 0;
            text-align: right;
            /* Align text to the right */
            direction: rtl;
            /* Sets the list direction to right-to-left */
        }
    </style>
</head>

<body>
    <!-- header -->
    <section class="profile-card">
        <div class="profile-content">
            <div class="profile-info">
                <header class="profile-header">
                    <div class="profile-title">
                        {{-- <div class="badge">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3947dbfe17b9289895a0373c1c9056bff2634befcdf6a25a06623f1c87e077ea?apiKey=3543d39e660b480d8d9ca32bb38e65cc&"
                                alt="" class="badge-icon" />
                            <span>شغوف مميز</span>
                        </div> --}}
                        <h1 class="profile-name">Amal Mohammed</h1>
                    </div>
                    <div class="profile-details">
                        <p class="job-title">Graphic designer</p>
                        <div class="stats">
                            <div class="projects">
                                <span class="project-count">16 مشروع</span>
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1260046549edb82521d8ea5a4d75fd5cc3632c843e6f5cf8e558caba3cdd504b?apiKey=3543d39e660b480d8d9ca32bb38e65cc&"
                                    alt="Projects icon" class="stats-icon" />
                            </div>
                            <div class="location">
                                <span class="country">Egypt</span>
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/0d66bb0bf7560a546a5d81d541e462f6b106f2e5e26e24f0b405d366c5f12517?apiKey=3543d39e660b480d8d9ca32bb38e65cc&"
                                    alt="Location icon" class="stats-icon" />
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <div class="profile-image-wrapper">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e3d7de2f4883118bf6d721bba985f904fb77962449a13fe33a28103ff5114b1a?apiKey=3543d39e660b480d8d9ca32bb38e65cc&"
                    alt="Profile picture of Amal Mohammed" class="profile-image" />
            </div>
        </div>
    </section>
    <section class="profile-section">
        <div class="ratings-container">
            <span class="packages-text">التقييمات</span>
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/a7d8238a5b9a29df893e735b7ce8ccdccb84ee783e57efe65a256ddc26d4c51a?apiKey=3543d39e660b480d8d9ca32bb38e65cc&"
                class="icon" alt="" />
        </div>
        <div class="packages-container">
            <button class="packages-button">
                <span class="packages-text">باقات ومنتجات</span>
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8a73a961b9fe4cabc39534c3a83da65b7d58e236292afc51a29f15d8ac71c80?apiKey=3543d39e660b480d8d9ca32bb38e65cc&"
                    class="icon" alt="" />
            </button>
            <span class="portfolio-text">معرض الاعمال</span>
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3380fdf5e287fb7f82cb508865c53b11ff1dab91d52b8f0b80e186cbcf113a7a?apiKey=3543d39e660b480d8d9ca32bb38e65cc&"
                class="icon" alt="" />
        </div>
        <div class="profile-container">
            <span class="profile-text">الملف التعريفي</span>
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/20b5886db1b83e76a733eed5e995ae16e9c7ddce71ad6b4734f565ffaed7555e?apiKey=3543d39e660b480d8d9ca32bb38e65cc&"
                class="icon" alt="" />
        </div>
    </section>
    <div class="main-container">
        <section class="image-model-container">
            <h2 class="image-model-title">نموذج الصور</h2>
            <div class="content-wrapper">
                <p class="image-model-description">
                    يساعدك في تعزيز احترافيتك للعملاء كل ماكان المشروع مليء بالصور كل
                    ماوثق العميل في التعامل معك
                </p>
                <h3 class="work-cover-title">غلاف العمل</h3>
            </div>
            <div class="skills-wrapper">
                <p class="work-cover-description">
                    يساعدك في ابراز احترافيتك وجذب العملاء من خلال غلاف جذاب
                </p>
                <h3 class="skills-title">مهارات العمل</h3>
                <p class="skills-description">
                    توضح للعميل المهارات المستخدمة في تنفيذ العمل ، وتعزز تمكنك من العمل
                    المنفذ
                </p>
                <h3 class="work-description-title">وصف العمل</h3>
            </div>
            <p class="work-description-content">
                اكتب وصف دقيق للعمل توضح فية العمل المنجز لابراز قدراتك ونجاحك في
                العمل
            </p>
        </section>

        <section class="upload-section">
            <div class="progresss-bar">
                <div class="step-circle">
                    <div class="step-inner-circle"></div>
                </div>
                <div class="progress-line"></div>
                <div class="step-circle active-step">
                    <div class="step-inner-circle active-inner-circle"></div>
                </div>
                <div class="progress-line"></div>
                <div class="step-circle">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1e2fb8ecbf31ede605e3b4d8d57b6c109806e631d62356ee49c37ab9e30874f9?apiKey=3543d39e660b480d8d9ca32bb38e65cc&"
                        alt="" class="step-icon" />
                </div>
            </div>
            <div class="step-titles">
                <div>مراجعة العمل</div>
                <div>تفاصيل العمل</div>
                <div>عنوان العمل</div>
            </div>
            <h2 class="upload-instruction">
                <span style="color: #ff0909">*</span>
                يجب عليك إضافة صورة غلاف لمشروعك
            </h2>

            <div class="upload-area" id="uploadArea" tabindex="0" role="button">
                <span>قم بسحب الصور وإفلاتها أو</span>
                <span style="color: #3d96fc; cursor: pointer;">تصفح</span>
                <span>ملفات الصور</span>
                <input type="file" id="fileInput" style="display: none;" accept="image/*">
            </div>



            <ul class="upload-requirements">
                <li>
                    الصور (.jpg، .gif، .png، يصل حجمها إلى 10 ميغابايت، ولا يزيد حجمها
                    عن 4000 بكسل في أي بُعد)
                </li>
            </ul>
            <ul class="image-dimensions">
                <li>ابعاد الصورة ( 300*300)</li>
            </ul>
            <ul class="max-images">
                <li>الحد الاقصى لمجموع الصور ( 20 صورة)</li>
            </ul>

            <section class="product-card-container" style="display: flex; width: 100%; flex-wrap: wrap">
                <article class="product-card">

                    <div class="progress-container">
                        <div id="previewContainer" style="width:163px; height:146px;"></div>

                        <div id="progressContainer" style="display: none;">
                            <progress id="progressBar" value="0" max="100"></progress>
                        </div>
                        <div class="progresss-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </article>


            </section>
            <section class="project-details">
                <h2 class="upload-instruction">
                    <span class="required">*</span>
                    يجب عليك إضافة صورة غلاف لمشروعك
                </h2>
                <div class="upload-area" id="uploadArea2" tabindex="0" role="button">
                    <span>قم بسحب الصور وإفلاتها أو</span>
                    <span style="color: #3d96fc; cursor: pointer;">تصفح</span>
                    <span>ملفات الصور</span>
                    <input type="file" id="fileInput2" style="display: none;" accept="image/*">
                </div>

                <article class="product-card-variant">

                    <div id="previewContainer2"></div>
                    <div id="progressContainer2" style="display: none;">
                        <progress id="progressBar2" value="0" max="100"></progress>
                    </div>

                </article>

                <h3 class="description-title">اختر مهارات العمل</h3>
                <div class="skills-input">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b3e4c17e1dcee2fa4ee809059e86081dfd386f0be370cc3ba6bb65bf5e18a8ec?apiKey=3543d39e660b480d8d9ca32bb38e65cc&"
                        alt="" class="skills-icon" />
                </div>
                <h3 class="description-title">وصف العمل</h3>
                <textarea class="description-input" aria-label="وصف العمل"></textarea>
            </section>

            <section class="action-buttons">
                <button class="next-button" type="button">
                    <span class="visually-hidden">Next</span>
                    التالي
                </button>
                <button class="cancel-button" type="button">
                    <span class="visually-hidden">Cancel</span>
                    الغاء
                </button>
            </section>
        </section>
    </div>
</body>

<script>
    const uploadArea = document.getElementById('uploadArea');
    const fileInput = document.getElementById('fileInput');
    const previewContainer = document.getElementById('previewContainer');
    const progressContainer = document.getElementById('progressContainer');
    const progressBar = document.getElementById('progressBar');

    // Click event to open file dialog
    uploadArea.addEventListener('click', () => {
        fileInput.click();
    });

    // Drag and drop events
    uploadArea.addEventListener('dragover', (event) => {
        event.preventDefault();
        uploadArea.classList.add('dragging');
    });

    uploadArea.addEventListener('dragleave', () => {
        uploadArea.classList.remove('dragging');
    });

    uploadArea.addEventListener('drop', (event) => {
        event.preventDefault();
        uploadArea.classList.remove('dragging');
        handleFiles(event.dataTransfer.files);
    });

    // File input change event
    fileInput.addEventListener('change', (event) => {
        handleFiles(event.target.files);
    });

    function handleFiles(files) {
        if (files.length > 0) {
            const file = files[0];
            if (file.type.startsWith('image/')) {
                displayPreview(file);
                simulateUpload();
            } else {
                alert('Please upload an image file.');
            }
        }
    }

    function displayPreview(file) {
        const reader = new FileReader();
        reader.onload = (event) => {
            previewContainer.innerHTML = `<img src="${event.target.result}" alt="Uploaded Image Preview">`;
        };
        reader.readAsDataURL(file);
    }

    function simulateUpload() {
        progressContainer.style.display = 'block';
        progressBar.value = 0;

        const interval = setInterval(() => {
            if (progressBar.value < 100) {
                progressBar.value += 10;
            } else {
                clearInterval(interval);
                alert('Upload complete!');
                progressContainer.style.display = 'none';
            }
        }, 200);
    }


    function initImageUploader(uploadAreaId, fileInputId, previewContainerId, progressContainerId, progressBarId) {
        const uploadArea = document.getElementById(uploadAreaId);
        const fileInput = document.getElementById(fileInputId);
        const previewContainer = document.getElementById(previewContainerId);
        const progressContainer = document.getElementById(progressContainerId);
        const progressBar = document.getElementById(progressBarId);

        // Click event to open file dialog
        uploadArea.addEventListener('click', () => {
            fileInput.click();
        });

        // Drag and drop events
        uploadArea.addEventListener('dragover', (event) => {
            event.preventDefault();
            uploadArea.classList.add('dragging');
        });

        uploadArea.addEventListener('dragleave', () => {
            uploadArea.classList.remove('dragging');
        });

        uploadArea.addEventListener('drop', (event) => {
            event.preventDefault();
            uploadArea.classList.remove('dragging');
            handleFiles(event.dataTransfer.files);
        });

        // File input change event
        fileInput.addEventListener('change', (event) => {
            handleFiles(event.target.files);
        });

        function handleFiles(files) {
            if (files.length > 0) {
                const file = files[0];
                if (file.type.startsWith('image/')) {
                    displayPreview(file);
                    simulateUpload();
                } else {
                    alert('Please upload an image file.');
                }
            }
        }

        function displayPreview(file) {
            const reader = new FileReader();
            reader.onload = (event) => {
                previewContainer.innerHTML = `<img src="${event.target.result}" alt="Uploaded Image Preview">`;
            };
            reader.readAsDataURL(file);
        }

        function simulateUpload() {
            progressContainer.style.display = 'block';
            progressBar.value = 0;

            const interval = setInterval(() => {
                if (progressBar.value < 100) {
                    progressBar.value += 10;
                } else {
                    clearInterval(interval);
                    alert('Upload complete!');
                    progressContainer.style.display = 'none';
                }
            }, 200);
        }
    }

    // Initialize both uploaders
    initImageUploader('uploadArea', 'fileInput', 'previewContainer', 'progressContainer', 'progressBar');
    initImageUploader('uploadArea2', 'fileInput2', 'previewContainer2', 'progressContainer2', 'progressBar2');
</script>

</html>

@include('layout.footer')
