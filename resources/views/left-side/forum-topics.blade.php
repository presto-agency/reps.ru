@if($sectionItems)
<div class="forum-topics">
    <div class="forum-topics__title">

        <svg class="title__icon"  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">

		<path d="M437.019,74.98C388.667,26.629,324.38,0,256,0C187.619,0,123.331,26.629,74.98,74.98C26.628,123.332,0,187.62,0,256
			s26.628,132.667,74.98,181.019C123.332,485.371,187.619,512,256,512c68.38,0,132.667-26.629,181.019-74.981
			C485.371,388.667,512,324.38,512,256S485.371,123.333,437.019,74.98z M256,482C131.383,482,30,380.617,30,256S131.383,30,256,30
			s226,101.383,226,226S380.617,482,256,482z"/>

            <path d="M378.305,173.859c-5.857-5.856-15.355-5.856-21.212,0.001L224.634,306.319l-69.727-69.727
			c-5.857-5.857-15.355-5.857-21.213,0c-5.858,5.857-5.858,15.355,0,21.213l80.333,80.333c2.929,2.929,6.768,4.393,10.606,4.393
			c3.838,0,7.678-1.465,10.606-4.393l143.066-143.066C384.163,189.215,384.163,179.717,378.305,173.859z"/>
</svg>

        <p class="title__text">Темы форума</p>
    </div>

    <div class="forum-topics__accordion" id="forum-topicsAccordion">
        @foreach($sectionItems as $item)
        <div class="accordion__topic card">
            <div class="topic__header card-header js-accordion-title" id="forum-topicsOne" data-toggle="collapse" data-target="#forum-topicsCollapseOne" aria-expanded="true" aria-controls="collapseOne">
                <a href="{{ route('forum.show', $item->id) }}" class="header__title">{{ $item->title }}</a>
                {{--<i class="fas fa-chevron-down"></i>--}}

            </div>

            {{--<div id="forum-topicsCollapseOne" class="topic__body collapse" aria-labelledby="forum-topicsOne">
                <div class="card-body">
                    <div class="body__wrap">
                        <a href="#" class="body__title">Господи, что стало с репсами</a>
                        <span class="body__numb">(1)</span>
                    </div>
                    <div class="body__wrap">
                        <a href="#" class="body__title">help</a>
                        <span class="body__numb">(2)</span>
                    </div>
                    <div class="body__wrap">
                        <a href="#" class="body__title">Что с Effort`ом?</a>
                        <span class="body__numb">(2)</span>
                    </div>
                    <div class="body__wrap">
                        <a href="#" class="body__title">Где сейчас можно поиграть в БВ?</a>
                        <span class="body__numb">(12)</span>
                    </div>
                    <div class="body__wrap">
                        <a href="#" class="body__title">Empty Topic</a>
                        <span class="body__numb">(6)</span>
                    </div>
                </div>
            </div>--}}
        </div>
        @endforeach
    </div>
</div>
@endif
