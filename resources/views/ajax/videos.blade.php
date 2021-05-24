@foreach($employee->videos as $index => $video)
<li class="my-4 videoBlockOld" id="videoBlock_{{ $index }}">
    <div class="mb-3">
        <div class="row">
            <label for="video_'+ videoCount +'" class="col-sm-3 col-form-label">Видео</label>
            <div class="col-sm-9">
                <video controls="controls" class="user-video">
                    <source src="{{ '/storage/'.$video->video }}">
                </video>
            </div>
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="videoName_{{ $index }}" class="col-3 col-form-label">Название видео</label>
        <div class="col-sm-9">
            <input class="form-control videoName" type="text" id="videoName_{{ $index }}" placeholder="Название видео" autocomplete="off" disabled value="{{ $video->videoName }}">
        </div>
    </div>
    <div class="form-group mb-3 row">
        <label for="videoDate_{{ $index }}" class="col-3 col-form-label">Дата видео</label>
        <div class="col-sm-9">
            <input class="form-control videoDate" type="date" id="videoDate_{{ $index }}" placeholder="Дата видео" disabled value="{{ $video->videoDate }}">
        </div>
    </div>
    <button class="btn btn-danger delete" type="button" video-id="{{$video->id}}">Удалить</button>
</li>
@endforeach