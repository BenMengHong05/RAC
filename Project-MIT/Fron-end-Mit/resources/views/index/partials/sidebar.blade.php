
<div class="sider-box" id="sider-box">
    <div class="sider-search position-relative" id="sider-search ">
        <div class="menu">
        </div>
        <div class="position-relative ps-4" style="width: 90%">
            <h6 class="siderbar-search  ">Explore websites, people, and locations</h6>
            <div class="input-icon   d-flex align-items-center" style="position: relative;">
                <i class="fa-solid fa-magnifying-glass ps-3  fs-3 text-danger mt-1 " ></i>
                <input type="search" onfocus="searchsiderbarjs()" class="border-0  shadow-none search-input"
                    id="searchInput" placeholder="ស្វែងរក" aria-label="ស្វែងរក"
                    style="width: 100%;padding-left: 4rem;padding-right: 2rem;background-color: rgba(51, 50, 50, 0.05)" />
            </div>
            <div id="results" class="output-database-item"
                style="height: auto;width: 100%;background-color: rgba(237, 237, 237)">

            </div>
        </div>
    </div>
    <div class="sider-menu mt-4 " id="sider-menu">
        <div class="menu-a">
            <h6 class="ms-4 siderbar-search">Top resources for</h6>
            <ul class="d-flex flex-column align-items-start​  justify-content-start " style="font-size: 0.9rem">
                <li><a href="" class="d-flex align-items-center  gap-1 category-descrition">
                        <div class="trel"></div>អនាគតសិស្ស
                    </a></li>
                <li><a href="" class="d-flex align-items-center gap-1 category-descrition">
                        <div class="trel"></div>បច្ចុប្បន្នសិស្ស
                    </a></li>
                <li><a href="" class="d-flex align-items-center gap-1 category-descrition">
                        <div class="trel"></div>សាស្ត្រាចារ្យ និងបុគ្គលិក
                    </a></li>
                <li><a href="" class="d-flex align-items-center gap-1 category-descrition">
                        <div class="trel"></div>អតីតនិស្សិត
                    </a></li>
                <li><a href="" class="d-flex align-items-center gap-1 category-descrition">
                        <div class="trel"></div>ឪពុកម្តាយ និងក្រុមគ្រួសារ
                    </a></li>
                <li><a href="" class="d-flex align-items-center gap-1 category-descrition">
                        <div class="trel"></div>ធនធានទាំងអស់
                    </a></li>
            </ul>
        </div>
        <div class="menu-b mt-2">
            <h6 class="ms-4 siderbar-search">Featured topic</h6>
            <ul class="d-flex  gap-2 align-items-start justify-content-start ">
                <li class="d-flex align-items-center gap-3 "><a href=""
                        class="d-flex align-items-center gap-1 category-descrition" style="font-size: 0.9rem">
                        <div class="trel"></div>ការប្រែប្រួលអាកាសធាតុ
                    </a> </li>
                <a href="" class=" px-2"
                    style="border-radius: 50%;background-color: rgb(29, 215, 29);cursor: pointer;">
                    <i class="fa-solid fa-arrow-up " style="font-size: 0.8rem;rotate: 30deg"></i>
                </a>
            </ul>
        </div>
    </div>
    <div class="josth-us ms-4 mt-2 " id="josth-us">
        <i class="fa-solid fa-arrow-up p-1"></i>
        <h6>Join us in <br>
            building a <br>
            better world.
        </h6>
    </div>
    <div class="sider-footer ms-4 mt-3  m-0 p-0" id="sider-footer">
        <h6 style="font-family: sans-serif;font-weight: 600">Royal Academy of Cambodia</h6>
        <h6 href="#" class="massa text-dark" style="font-family: sans-serif;font-size: 1rem">Royal Academy of
            Cambodia MA, CMB</h6>
        <div class="menu container">
            <div class="row" style="width: 100%">
                <ul class="primary-menu d-flex  gap-3 m-0 p-0" style="height: auto">
                    <li><a href="" class="text-decoration-none">Visit</a></li>
                    <li><a href="" class="text-decoration-none">Map</a></li>
                    <li><a href="" class="text-decoration-none">Events</a></li>
                    <li><a href="" class="text-decoration-none">People</a></li>
                </ul>
                <ul class="secondary-menu d-flex flex-wrap  gap-3 m-0 p-0" style="height: auto">
                    <li><a href="" class="text-decoration-none">Privacy</a></li>
                    <li><a href="" class="text-decoration-none " style="white-space: nowrap">Social Media Hub
                        </a></li>
                    <li><a href="https://www.facebook.com/rac.gov.kh" class="text-decoration-none">
                            <i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UCE2-mDBbetmonrNa7jIhwIA" class="text-decoration-none">
                            <i class="fa-brands fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            const query = $(this).val();
            if (query.length > 0) {
                $.ajax({
                    url: '{{ route('search') }}',
                    type: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#results').html(data.html);
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        $('#results').html(
                            '<li class="output-database-item">Text Not Found</li>');
                    }
                });
            } else {
                $('#results').html
                ("");
            }
        });
    });
</script>
