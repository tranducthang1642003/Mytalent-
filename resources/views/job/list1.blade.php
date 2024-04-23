@if ($averageMatchPercentage == 0)
    <p>Không có CV nào phù hợp.</p>
@else
    <h2>Mức độ phù hợp CV và công việc: {{ $averageMatchPercentage }}%</h2>

    <h3>Từ khóa công việc:</h3>
    <ul>
        @foreach ($jobKeywords as $keyword)
            <li>{{ $keyword }}</li>
        @endforeach
    </ul>

    <h3>Từ khóa CV:</h3>
    <ul>
        @foreach ($cvKeywords as $keyword)
            <li>{{ $keyword }}</li>
        @endforeach
    </ul>

    <h2>Các CV phù hợp:</h2>
    <ul>
        @foreach ($matchingCvs as $cv)
            <li>
                <h3>{{ $cv->Name }}</h3>
                <p>Email: {{ $cv->Email }}</p>
                <p>Lương hiện tại: {{ $cv->Currentsalary }}</p>
                <!-- Add more CV fields as needed -->
            </li>
        @endforeach
    </ul>
@endif
