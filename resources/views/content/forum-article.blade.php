@if($section)
<section class="forum_acticle">
    <div class="wrapper">
        <div class="title_block">
            <div class="left_section">
                <button>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 227 227" style="enable-background:new 0 0 227 227;" xml:space="preserve">
                            <path d="M224.2,67.3c-2.9-5.4-7.8-9.4-13.7-11.2c-5.9-1.8-12.1-1.2-17.6,1.7c-5.4,2.9-9.4,7.8-11.2,13.7c-1.2,3.9-1.3,8-0.4,11.9
                                l-24.9,13.3c-7.6-10.6-19.4-18-32.9-19.8V55.7c9.8-2.6,17.1-11.6,17.1-22.3c0-12.7-10.3-23.1-23.1-23.1S94.5,20.7,94.5,33.4
                                c0,10.6,7.2,19.6,17.1,22.3v21.3c-17.3,2.2-31.8,13.7-38.2,29.3l-27.3-7.3c0-4-1-7.9-3.1-11.5c-3.1-5.3-8-9.2-14-10.8
                                c-12.3-3.3-25,4-28.3,16.3C-0.8,98.8,0,105,3.1,110.4s8,9.2,14,10.8c2,0.5,4,0.8,6,0.8c4,0,7.9-1,11.5-3.1c3.6-2,6.4-4.9,8.4-8.4
                                l27.3,7.3c-0.3,2.1-0.5,4.3-0.5,6.5c0,11,3.8,21.2,10,29.3l-20,20c-8.8-5.1-20.3-3.9-27.8,3.7c-9,9-9,23.6,0,32.6
                                c4.5,4.5,10.4,6.7,16.3,6.7c5.9,0,11.8-2.2,16.3-6.7c7.5-7.5,8.7-19,3.7-27.8l20-20c8.1,6.3,18.2,10,29.3,10s21.2-3.8,29.3-10
                                l20,20c-5.1,8.8-3.9,20.3,3.7,27.8c4.5,4.5,10.4,6.7,16.3,6.7s11.8-2.2,16.3-6.7c9-9,9-23.6,0-32.6c-7.5-7.5-19-8.7-27.8-3.7
                                l-20-20c6.3-8.1,10-18.2,10-29.3c0-6-1.1-11.8-3.2-17.1l24.9-13.3c2.7,2.9,6.2,5.1,10.1,6.3c2.2,0.7,4.5,1,6.7,1
                                c3.7,0,7.5-0.9,10.9-2.7c5.4-2.9,9.4-7.8,11.2-13.7S227.2,72.7,224.2,67.3L224.2,67.3z M209.1,87.9c-2.6,1.4-5.6,1.7-8.4,0.8
                                c-2.8-0.9-5.2-2.8-6.6-5.4c-1.4-2.6-1.7-5.6-0.8-8.4c0.9-2.8,2.8-5.2,5.4-6.6c1.6-0.9,3.4-1.3,5.2-1.3c1.1,0,2.2,0.2,3.2,0.5
                                c2.8,0.9,5.2,2.8,6.6,5.4c1.4,2.6,1.7,5.6,0.8,8.4C213.6,84.2,211.7,86.5,209.1,87.9z M153.4,124.4c0,19.7-16.1,35.8-35.8,35.8
                                s-35.8-16.1-35.8-35.8s16.1-35.8,35.8-35.8S153.4,104.6,153.4,124.4z M106.5,33.4c0-6.1,5-11.1,11.1-11.1s11.1,5,11.1,11.1
                                s-5,11.1-11.1,11.1S106.5,39.5,106.5,33.4z M20.2,109.6c-2.9-0.8-5.2-2.6-6.7-5.2c-1.5-2.6-1.9-5.5-1.1-8.4
                                c1.6-5.9,7.7-9.4,13.6-7.8c2.9,0.8,5.2,2.6,6.7,5.2c1.5,2.6,1.9,5.5,1.1,8.4C32.2,107.7,26.1,111.2,20.2,109.6z M56.2,201.4
                                c-4.3,4.3-11.3,4.3-15.6,0c-4.3-4.3-4.3-11.3,0-15.6c2.2-2.2,5-3.2,7.8-3.2c2.8,0,5.7,1.1,7.8,3.2
                                C60.5,190.1,60.5,197.1,56.2,201.4z M194.7,185.8c4.3,4.3,4.3,11.3,0,15.6c-4.3,4.3-11.3,4.3-15.6,0c-4.3-4.3-4.3-11.3,0-15.6
                                c2.2-2.2,5-3.2,7.8-3.2C189.7,182.5,192.5,183.6,194.7,185.8z"/>
                    </svg>
                    <p class="title_text">{{ $section->name ? $section->title : '' }}</p>
                </button>
            </div>
            <div class="right_section">
                <button>
                    <span>По дате:</span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" class="svg-inline--fa fa-angle-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg>
                </button>
            </div>
        </div>

        @if($section->topics)
            @foreach($section->topics as $topic)
            <div class="content_article">
                <div class="block_nameArticle">
                    <a href="{{ route('topic.show', $topic->id) }}">
                        <p class="name">{{ $topic->title }}</p>
                    </a>
                    <p class="date">{{ $topic->created_at }}</p>
                </div>
                <div class="detailed-news__info">
                    <div class="info__items">
                        <div class="info_right">
                            <a class="items__watch" href="#">
                                <svg id="Capa_1" enable-background="new 0 0 515.556 515.556" viewBox="0 0 515.556 515.556" xmlns="http://www.w3.org/2000/svg"><path d="m257.778 64.444c-119.112 0-220.169 80.774-257.778 193.334 37.609 112.56 138.666 193.333 257.778 193.333s220.169-80.774 257.778-193.333c-37.609-112.56-138.666-193.334-257.778-193.334zm0 322.223c-71.184 0-128.889-57.706-128.889-128.889 0-71.184 57.705-128.889 128.889-128.889s128.889 57.705 128.889 128.889c0 71.182-57.705 128.889-128.889 128.889z"></path><path d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138 65.971-25.167 91.138 0"></path></svg>
                                <span>32</span>
                            </a>
                            <a class="items__comment" href="#">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.6 511.6" style="enable-background:new 0 0 511.6 511.6;" xml:space="preserve">
                            <path d="M301.9,327.6c30.9-13,55.3-30.8,73.2-53.2C393,251.9,402,227.4,402,201c0-26.5-8.9-50.9-26.8-73.4
                                    c-17.9-22.5-42.3-40.2-73.2-53.2C271,61.3,237.4,54.8,201,54.8c-36.4,0-70,6.5-100.9,19.6c-30.9,13-55.3,30.8-73.2,53.2
                                    C8.9,150.1,0,174.5,0,201c0,22.6,6.8,44,20.3,64c13.5,20,32.1,36.8,55.7,50.5c-1.9,4.6-3.9,8.8-5.9,12.6c-2,3.8-4.4,7.5-7.1,11
                                    c-2.8,3.5-4.9,6.3-6.4,8.3c-1.5,2-4,4.8-7.4,8.4c-3.4,3.6-5.6,6-6.6,7.1c0-0.2-0.4,0.2-1.1,1.3c-0.8,1-1.2,1.5-1.3,1.4
                                    c-0.1-0.1-0.5,0.4-1.1,1.4c-0.7,1-1,1.6-1,1.6l-0.7,1.4c-0.3,0.6-0.5,1.1-0.6,1.7c-0.1,0.6-0.1,1.2-0.1,1.9s0.1,1.3,0.3,1.9
                                    c0.4,2.5,1.5,4.5,3.3,6c1.8,1.5,3.8,2.3,5.9,2.3h0.9c9.5-1.3,17.7-2.9,24.6-4.6c29.3-7.6,55.8-19.8,79.4-36.5
                                    c17.1,3,33.9,4.6,50.2,4.6C237.3,347.2,271,340.6,301.9,327.6z M142.2,303.8l-12.6,8.8c-5.3,3.6-11.2,7.3-17.7,11.1l10-24
                                    l-27.7-16c-18.3-10.7-32.5-23.2-42.5-37.7c-10.1-14.5-15.1-29.5-15.1-45.1c0-19.4,7.5-37.6,22.4-54.5
                                    c14.9-16.9,35.1-30.4,60.4-40.3c25.3-9.9,52.5-14.8,81.7-14.8s56.3,5,81.7,14.8c25.3,9.9,45.4,23.3,60.4,40.3
                                    c14.9,16.9,22.4,35.1,22.4,54.5c0,19.4-7.5,37.6-22.4,54.5c-14.9,16.9-35.1,30.4-60.4,40.3c-25.3,9.9-52.5,14.8-81.7,14.8
                                    c-14.3,0-28.8-1.3-43.7-4L142.2,303.8z"></path>
                                    <path d="M491.3,338.2c13.5-19.9,20.3-41.3,20.3-64.1c0-23.4-7.1-45.3-21.4-65.7c-14.3-20.4-33.7-37.3-58.2-50.8
                                    c4.4,14.3,6.6,28.7,6.6,43.4c0,25.5-6.4,49.7-19.1,72.5c-12.8,22.8-31,43-54.8,60.5c-22.1,16-47.2,28.3-75.4,36.8
                                    c-28.2,8.6-57.6,12.8-88.2,12.8c-5.7,0-14.1-0.4-25.1-1.1c38.3,25.1,83.2,37.7,134.8,37.7c16.4,0,33.1-1.5,50.3-4.6
                                    c23.6,16.8,50.1,28.9,79.4,36.5c6.9,1.7,15,3.2,24.6,4.6c2.3,0.2,4.4-0.5,6.3-2c1.9-1.5,3.1-3.6,3.7-6.3c-0.1-1.1,0-1.8,0.3-1.9
                                    c0.3-0.1,0.2-0.7-0.1-1.9c-0.4-1.1-0.6-1.7-0.6-1.7l-0.7-1.4c-0.2-0.4-0.5-0.9-1-1.6c-0.5-0.7-0.9-1.1-1.1-1.4
                                    c-0.3-0.3-0.7-0.8-1.3-1.4c-0.6-0.7-1-1.1-1.1-1.3c-1-1.1-3.1-3.5-6.6-7.1c-3.4-3.6-5.9-6.4-7.4-8.4c-1.5-2-3.7-4.8-6.4-8.3
                                    c-2.8-3.5-5.1-7.2-7.1-11c-2-3.8-3.9-8-5.9-12.6C459.3,374.9,477.8,358.1,491.3,338.2z"></path>
                            </svg>
                                <span>{{ $topic->comments_count }}</span>
                            </a>
                        </div>
                        <a class="block_account" href="#">
                            {{--<img class="search_img" src="{{ url('/images/ava_forumArcicle.png') }}">--}}
                            <img class="search_img" src="{{ asset($topic->author->avatar) }}">
                            <span>{{ $topic->author->name }}</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
        {{--<button class="content_article">
            <div class="block_nameArticle">
                <p class="name">Господи, что стало с репсами</p>
                <p class="date">09.09.2019</p>
            </div>
            <div class="detailed-news__info">
                <div class="info__items">
                    <div class="info_right">
                        <a class="items__watch" href="#">
                            <svg id="Capa_1" enable-background="new 0 0 515.556 515.556" viewBox="0 0 515.556 515.556" xmlns="http://www.w3.org/2000/svg"><path d="m257.778 64.444c-119.112 0-220.169 80.774-257.778 193.334 37.609 112.56 138.666 193.333 257.778 193.333s220.169-80.774 257.778-193.333c-37.609-112.56-138.666-193.334-257.778-193.334zm0 322.223c-71.184 0-128.889-57.706-128.889-128.889 0-71.184 57.705-128.889 128.889-128.889s128.889 57.705 128.889 128.889c0 71.182-57.705 128.889-128.889 128.889z"></path><path d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138 65.971-25.167 91.138 0"></path></svg>
                            <span>32</span>
                        </a>
                        <a class="items__comment" href="#">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.6 511.6" style="enable-background:new 0 0 511.6 511.6;" xml:space="preserve">
                        <path d="M301.9,327.6c30.9-13,55.3-30.8,73.2-53.2C393,251.9,402,227.4,402,201c0-26.5-8.9-50.9-26.8-73.4
                                c-17.9-22.5-42.3-40.2-73.2-53.2C271,61.3,237.4,54.8,201,54.8c-36.4,0-70,6.5-100.9,19.6c-30.9,13-55.3,30.8-73.2,53.2
                                C8.9,150.1,0,174.5,0,201c0,22.6,6.8,44,20.3,64c13.5,20,32.1,36.8,55.7,50.5c-1.9,4.6-3.9,8.8-5.9,12.6c-2,3.8-4.4,7.5-7.1,11
                                c-2.8,3.5-4.9,6.3-6.4,8.3c-1.5,2-4,4.8-7.4,8.4c-3.4,3.6-5.6,6-6.6,7.1c0-0.2-0.4,0.2-1.1,1.3c-0.8,1-1.2,1.5-1.3,1.4
                                c-0.1-0.1-0.5,0.4-1.1,1.4c-0.7,1-1,1.6-1,1.6l-0.7,1.4c-0.3,0.6-0.5,1.1-0.6,1.7c-0.1,0.6-0.1,1.2-0.1,1.9s0.1,1.3,0.3,1.9
                                c0.4,2.5,1.5,4.5,3.3,6c1.8,1.5,3.8,2.3,5.9,2.3h0.9c9.5-1.3,17.7-2.9,24.6-4.6c29.3-7.6,55.8-19.8,79.4-36.5
                                c17.1,3,33.9,4.6,50.2,4.6C237.3,347.2,271,340.6,301.9,327.6z M142.2,303.8l-12.6,8.8c-5.3,3.6-11.2,7.3-17.7,11.1l10-24
                                l-27.7-16c-18.3-10.7-32.5-23.2-42.5-37.7c-10.1-14.5-15.1-29.5-15.1-45.1c0-19.4,7.5-37.6,22.4-54.5
                                c14.9-16.9,35.1-30.4,60.4-40.3c25.3-9.9,52.5-14.8,81.7-14.8s56.3,5,81.7,14.8c25.3,9.9,45.4,23.3,60.4,40.3
                                c14.9,16.9,22.4,35.1,22.4,54.5c0,19.4-7.5,37.6-22.4,54.5c-14.9,16.9-35.1,30.4-60.4,40.3c-25.3,9.9-52.5,14.8-81.7,14.8
                                c-14.3,0-28.8-1.3-43.7-4L142.2,303.8z"></path>
                                <path d="M491.3,338.2c13.5-19.9,20.3-41.3,20.3-64.1c0-23.4-7.1-45.3-21.4-65.7c-14.3-20.4-33.7-37.3-58.2-50.8
                                c4.4,14.3,6.6,28.7,6.6,43.4c0,25.5-6.4,49.7-19.1,72.5c-12.8,22.8-31,43-54.8,60.5c-22.1,16-47.2,28.3-75.4,36.8
                                c-28.2,8.6-57.6,12.8-88.2,12.8c-5.7,0-14.1-0.4-25.1-1.1c38.3,25.1,83.2,37.7,134.8,37.7c16.4,0,33.1-1.5,50.3-4.6
                                c23.6,16.8,50.1,28.9,79.4,36.5c6.9,1.7,15,3.2,24.6,4.6c2.3,0.2,4.4-0.5,6.3-2c1.9-1.5,3.1-3.6,3.7-6.3c-0.1-1.1,0-1.8,0.3-1.9
                                c0.3-0.1,0.2-0.7-0.1-1.9c-0.4-1.1-0.6-1.7-0.6-1.7l-0.7-1.4c-0.2-0.4-0.5-0.9-1-1.6c-0.5-0.7-0.9-1.1-1.1-1.4
                                c-0.3-0.3-0.7-0.8-1.3-1.4c-0.6-0.7-1-1.1-1.1-1.3c-1-1.1-3.1-3.5-6.6-7.1c-3.4-3.6-5.9-6.4-7.4-8.4c-1.5-2-3.7-4.8-6.4-8.3
                                c-2.8-3.5-5.1-7.2-7.1-11c-2-3.8-3.9-8-5.9-12.6C459.3,374.9,477.8,358.1,491.3,338.2z"></path>
                        </svg>
                            <span>3</span>
                        </a>
                    </div>
                    <a class="block_account" href="#">
                        <img class="search_img" src="{{ url('/images/ava_forumArcicle.png') }}">
                        <span>gOsuindаhOuse</span>
                    </a>
                </div>
            </div>
        </button>--}}
        {{--<button class="content_article">
            <div class="block_nameArticle">
                <p class="name">Господи, что стало с репсами</p>
                <p class="date">09.09.2019</p>
            </div>
            <div class="detailed-news__info">
                <div class="info__items">
                    <div class="info_right">
                        <a class="items__watch" href="#">
                            <svg id="Capa_1" enable-background="new 0 0 515.556 515.556" viewBox="0 0 515.556 515.556" xmlns="http://www.w3.org/2000/svg"><path d="m257.778 64.444c-119.112 0-220.169 80.774-257.778 193.334 37.609 112.56 138.666 193.333 257.778 193.333s220.169-80.774 257.778-193.333c-37.609-112.56-138.666-193.334-257.778-193.334zm0 322.223c-71.184 0-128.889-57.706-128.889-128.889 0-71.184 57.705-128.889 128.889-128.889s128.889 57.705 128.889 128.889c0 71.182-57.705 128.889-128.889 128.889z"></path><path d="m303.347 212.209c25.167 25.167 25.167 65.971 0 91.138s-65.971 25.167-91.138 0-25.167-65.971 0-91.138 65.971-25.167 91.138 0"></path></svg>
                            <span>32</span>
                        </a>
                        <a class="items__comment" href="#">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.6 511.6" style="enable-background:new 0 0 511.6 511.6;" xml:space="preserve">
                        <path d="M301.9,327.6c30.9-13,55.3-30.8,73.2-53.2C393,251.9,402,227.4,402,201c0-26.5-8.9-50.9-26.8-73.4
                                c-17.9-22.5-42.3-40.2-73.2-53.2C271,61.3,237.4,54.8,201,54.8c-36.4,0-70,6.5-100.9,19.6c-30.9,13-55.3,30.8-73.2,53.2
                                C8.9,150.1,0,174.5,0,201c0,22.6,6.8,44,20.3,64c13.5,20,32.1,36.8,55.7,50.5c-1.9,4.6-3.9,8.8-5.9,12.6c-2,3.8-4.4,7.5-7.1,11
                                c-2.8,3.5-4.9,6.3-6.4,8.3c-1.5,2-4,4.8-7.4,8.4c-3.4,3.6-5.6,6-6.6,7.1c0-0.2-0.4,0.2-1.1,1.3c-0.8,1-1.2,1.5-1.3,1.4
                                c-0.1-0.1-0.5,0.4-1.1,1.4c-0.7,1-1,1.6-1,1.6l-0.7,1.4c-0.3,0.6-0.5,1.1-0.6,1.7c-0.1,0.6-0.1,1.2-0.1,1.9s0.1,1.3,0.3,1.9
                                c0.4,2.5,1.5,4.5,3.3,6c1.8,1.5,3.8,2.3,5.9,2.3h0.9c9.5-1.3,17.7-2.9,24.6-4.6c29.3-7.6,55.8-19.8,79.4-36.5
                                c17.1,3,33.9,4.6,50.2,4.6C237.3,347.2,271,340.6,301.9,327.6z M142.2,303.8l-12.6,8.8c-5.3,3.6-11.2,7.3-17.7,11.1l10-24
                                l-27.7-16c-18.3-10.7-32.5-23.2-42.5-37.7c-10.1-14.5-15.1-29.5-15.1-45.1c0-19.4,7.5-37.6,22.4-54.5
                                c14.9-16.9,35.1-30.4,60.4-40.3c25.3-9.9,52.5-14.8,81.7-14.8s56.3,5,81.7,14.8c25.3,9.9,45.4,23.3,60.4,40.3
                                c14.9,16.9,22.4,35.1,22.4,54.5c0,19.4-7.5,37.6-22.4,54.5c-14.9,16.9-35.1,30.4-60.4,40.3c-25.3,9.9-52.5,14.8-81.7,14.8
                                c-14.3,0-28.8-1.3-43.7-4L142.2,303.8z"></path>
                                <path d="M491.3,338.2c13.5-19.9,20.3-41.3,20.3-64.1c0-23.4-7.1-45.3-21.4-65.7c-14.3-20.4-33.7-37.3-58.2-50.8
                                c4.4,14.3,6.6,28.7,6.6,43.4c0,25.5-6.4,49.7-19.1,72.5c-12.8,22.8-31,43-54.8,60.5c-22.1,16-47.2,28.3-75.4,36.8
                                c-28.2,8.6-57.6,12.8-88.2,12.8c-5.7,0-14.1-0.4-25.1-1.1c38.3,25.1,83.2,37.7,134.8,37.7c16.4,0,33.1-1.5,50.3-4.6
                                c23.6,16.8,50.1,28.9,79.4,36.5c6.9,1.7,15,3.2,24.6,4.6c2.3,0.2,4.4-0.5,6.3-2c1.9-1.5,3.1-3.6,3.7-6.3c-0.1-1.1,0-1.8,0.3-1.9
                                c0.3-0.1,0.2-0.7-0.1-1.9c-0.4-1.1-0.6-1.7-0.6-1.7l-0.7-1.4c-0.2-0.4-0.5-0.9-1-1.6c-0.5-0.7-0.9-1.1-1.1-1.4
                                c-0.3-0.3-0.7-0.8-1.3-1.4c-0.6-0.7-1-1.1-1.1-1.3c-1-1.1-3.1-3.5-6.6-7.1c-3.4-3.6-5.9-6.4-7.4-8.4c-1.5-2-3.7-4.8-6.4-8.3
                                c-2.8-3.5-5.1-7.2-7.1-11c-2-3.8-3.9-8-5.9-12.6C459.3,374.9,477.8,358.1,491.3,338.2z"></path>
                        </svg>
                            <span>3</span>
                        </a>
                    </div>
                    <a class="block_account" href="#">
                        <img class="search_img" src="{{ url('/images/ava_forumArcicle.png') }}">
                        <span>gOsuindаhOuse</span>
                    </a>
                </div>
            </div>
        </button>--}}
    </div>
    <div class="breaking-news__numb-pages">
        <p class="numb-pages">20 из 762</p>
    </div>
    <div class="breaking-news__button">
        <button class="button button__download-more">
            Загрузить еще
        </button>
    </div>
</section>
@endif
