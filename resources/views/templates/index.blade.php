@extends('base')
@section('styles')
    @parent
    <link href="{{asset("/media/css/style2.css")}}" rel="stylesheet" type="text/css">
@stop
@section('content')

    <div id="news">
        <h2> NEWS </h2>

        <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
    <div id="body_area"><h1> {{$text->name}}</h1>
        <p> {{$text->body}} In economics, business is the social science of managing people to organize and maintain collective productivity toward accomplishing particular creative and productive goals, usually to generate revenue.</p>

        <p>The etymology of "business" refers to the state of being busy, in the context of the individual as well as the community or society. In other words, to be busy is to be doing commercially viable and profitable work.</p>
        <p>
            The term "business" has at least three usages, depending on the scope — the general usage (above), the singular usage to refer to a particular company or corporation, and the generalized usage to refer to a particular market sector, such as "the record business," "the computer business," or "the business community" -- the community of suppliers of goods and services.</p>

        <p>The singular "business" can be a legally-recognized entity within an economically free society, wherein individuals organize based on expertise and skills to bring about social and technological advancement.</p>

        <p>From Wikipedia, the free encyclopedia</p>
    </div>
@stop