<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\DashboardViewRequest;
use Illuminate\Http\Request;
use Storage;

/**
 * Class DashboardController.
 */
class ParaviewglanceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('frontend.user.paraview_glance');
    }

    public function s3_bucket(Request $request){
        $filePath = $request->file('file');
        $filename = $request->filename;
        $result = Storage::disk('s3')->put($filename, file_get_contents($filePath),'public');
    }

    public function getGlanceImages(){
        $result = Storage::disk('s3')->allFiles();
    }

    public function fetchLogo(Request $request){
        $data = "data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMi4wLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDEwMjYgMzA2LjMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEwMjYgMzA2LjMiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGcgaWQ9IkxheWVyXzIiPg0KPC9nPg0KPGcgaWQ9IkxheWVyXzEiPg0KCTxnIGlkPSJMYXllcl8yXzJfIj4NCgk8L2c+DQoJPGc+DQoJCTxwYXRoIGZpbGw9IiMxNzJDMzYiIGQ9Ik0zNjUuMiwxMTMuN2wtOC4yLDM4LjdoLTIwLjVsMjEuNy0xMDJoMjdjMTMuNCwwLDIzLjIsMi42LDI5LjEsNy43YzYsNS4xLDcuOCwxMyw1LjYsMjMuNg0KCQkJYy0yLjEsMTAtNy4yLDE3LjktMTUuMSwyMy41Yy03LjksNS43LTE3LjcsOC41LTI5LjQsOC41SDM2NS4yeiBNMzY4LjYsOTcuN2g4LjNjNS42LDAsMTAuNC0xLjQsMTQuMy00LjINCgkJCWMzLjktMi44LDYuNC02LjcsNy41LTExLjhjMS00LjYsMC04LjMtMi44LTExYy0yLjktMi44LTctNC4yLTEyLjMtNC4yaC04LjNMMzY4LjYsOTcuN3oiLz4NCgkJPHBhdGggZmlsbD0iIzE3MkMzNiIgZD0iTTQ2NS4zLDE0MC4yYy00LjMsNS41LTguNyw5LjItMTMuNCwxMS4xYy00LjcsMS45LTksMi45LTEzLjEsMi45Yy03LjksMC0xMy44LTIuMi0xNy42LTYuNQ0KCQkJYy0zLjktNC4zLTUuMS05LjYtMy44LTE1LjljMS44LTguNSw2LjMtMTQuOSwxMy40LTE5LjNjNy4xLTQuNCwxNi43LTYuNiwyOC44LTYuNmgxMmwwLjMtMS42YzEuMS01LjQsMC41LTkuMS0yLjEtMTEuMw0KCQkJYy0yLjUtMi4yLTYuNC0zLjMtMTEuOC0zLjNjLTQuMSwwLTguNCwwLjgtMTIuOCwyLjNjLTQuNSwxLjYtOC40LDMuNi0xMS45LDYuMWwzLjEtMTcuMWMyLjgtMS40LDcuMS0yLjcsMTMtMy45DQoJCQljNS44LTEuMiwxMC44LTEuOCwxNC45LTEuOGMxMS40LDAsMTkuMSwyLjYsMjMsNy43YzMuOSw1LjIsNC43LDEzLjUsMi4yLDI1bC00LjMsMjAuMmMtMS40LDYuNi0yLjQsMTIuMy0zLjEsMTcNCgkJCWMtMC43LDQuNy0wLjksNy4xLTAuOCw3LjFoLTE3LjVjLTAuMiwwLTAuMS0xLjIsMC4yLTMuNkM0NjQsMTQ2LjUsNDY0LjUsMTQzLjYsNDY1LjMsMTQwLjJ6IE00NjguNywxMTlsMC4zLTEuM2gtOC45DQoJCQljLTcuMywwLjItMTIuOCwxLjMtMTYuNiwzLjRjLTMuOCwyLTYuMiw1LjEtNy4xLDkuMmMtMC42LDMtMC4xLDUuNCwxLjYsNy4xYzEuNywxLjcsNC42LDIuNiw4LjcsMi42YzUuNywwLDEwLjYtMiwxNC41LTYuMQ0KCQkJQzQ2NSwxMjkuNyw0NjcuNSwxMjQuOCw0NjguNywxMTl6Ii8+DQoJCTxwYXRoIGZpbGw9IiMxNzJDMzYiIGQ9Ik01MTguOSwxNTIuNWgtMTkuNGwxNi03NS4zaDE3LjRsLTMuNywxNy40YzMuMy02LjcsNy4zLTExLjYsMTEuOS0xNC42YzQuNy0zLDkuMi00LjUsMTMuNS00LjVMNTYwLDc2DQoJCQlsLTQuMiwxOS43Yy0wLjctMC40LTEuNy0wLjgtMy0xLjFjLTEuMy0wLjMtMy4xLTAuNS01LjMtMC41Yy01LjYsMC0xMC4xLDIuNC0xMy44LDcuMWMtMy42LDQuNy02LjMsMTEuMy04LjEsMTkuN0w1MTguOSwxNTIuNXoiDQoJCQkvPg0KCQk8cGF0aCBmaWxsPSIjMTcyQzM2IiBkPSJNNjAzLjQsMTQwLjJjLTQuMyw1LjUtOC43LDkuMi0xMy40LDExLjFjLTQuNywxLjktOSwyLjktMTMuMSwyLjljLTcuOSwwLTEzLjgtMi4yLTE3LjYtNi41DQoJCQljLTMuOS00LjMtNS4xLTkuNi0zLjgtMTUuOWMxLjgtOC41LDYuMy0xNC45LDEzLjQtMTkuM2M3LjEtNC40LDE2LjctNi42LDI4LjgtNi42aDEybDAuMy0xLjZjMS4xLTUuNCwwLjUtOS4xLTIuMS0xMS4zDQoJCQljLTIuNS0yLjItNi40LTMuMy0xMS44LTMuM2MtNC4xLDAtOC40LDAuOC0xMi44LDIuM2MtNC41LDEuNi04LjQsMy42LTExLjksNi4xbDMtMTcuMWMyLjgtMS40LDcuMS0yLjcsMTMtMy45DQoJCQljNS44LTEuMiwxMC44LTEuOCwxNC45LTEuOGMxMS40LDAsMTkuMSwyLjYsMjMsNy43YzMuOSw1LjIsNC43LDEzLjUsMi4yLDI1bC00LjMsMjAuMmMtMS40LDYuNi0yLjQsMTIuMy0zLjEsMTcNCgkJCWMtMC43LDQuNy0wLjksNy4xLTAuOCw3LjFoLTE3LjVjLTAuMiwwLTAuMS0xLjIsMC4yLTMuNkM2MDIuMSwxNDYuNSw2MDIuNiwxNDMuNiw2MDMuNCwxNDAuMnogTTYwNi44LDExOWwwLjMtMS4zaC04LjkNCgkJCWMtNy4zLDAuMi0xMi44LDEuMy0xNi42LDMuNGMtMy44LDItNi4yLDUuMS03LjEsOS4yYy0wLjYsMy0wLjEsNS40LDEuNiw3LjFjMS43LDEuNyw0LjYsMi42LDguNywyLjZjNS43LDAsMTAuNi0yLDE0LjUtNi4xDQoJCQlDNjAzLjEsMTI5LjcsNjA1LjYsMTI0LjgsNjA2LjgsMTE5eiIvPg0KCQk8cGF0aCBmaWxsPSIjMTcyQzM2IiBkPSJNNzI0LjMsNTAuNWgyMC4zbC01NS45LDEwMmgtMjUuMWwtMTMuNC0xMDJoMjEuOWw5LjEsODAuOEw3MjQuMyw1MC41eiIvPg0KCQk8cGF0aCBmaWxsPSIjMTcyQzM2IiBkPSJNNzU0LjYsMTUyLjVINzM1bDE2LTc1LjNoMTkuNkw3NTQuNiwxNTIuNXogTTc1My45LDYzLjVsNC0xOC43aDE5LjZsLTQsMTguN0g3NTMuOXoiLz4NCgkJPHBhdGggZmlsbD0iIzE3MkMzNiIgZD0iTTgzNi41LDE0OC4yYy0zLjcsMS45LTcuNywzLjMtMTIsNC40Yy00LjMsMS4xLTksMS42LTEzLjksMS42Yy0xMy4xLDAtMjIuMy0zLjQtMjcuOS0xMC4yDQoJCQljLTUuNS02LjgtNi45LTE2LjYtNC4yLTI5LjRjMi41LTExLjgsNy43LTIxLjMsMTUuNS0yOC40YzcuOS03LjIsMTcuMS0xMC43LDI3LjctMTAuN2MxMi43LDAsMjEsMy44LDI0LjksMTEuNQ0KCQkJYzMuOSw3LjcsNC4zLDE5LDEuMSwzMy45aC01Mi4yYy0wLjIsNS40LDAuNyw5LjUsMi41LDEyLjNjMi44LDQuNSw3LjksNi43LDE1LjIsNi43YzUuMywwLDEwLjUtMSwxNS44LTNjNS4zLTIsOC45LTMuNiwxMC44LTQuNw0KCQkJTDgzNi41LDE0OC4yeiBNNzk4LjIsMTA3LjVIODMyYzAuOS01LjYsMC4zLTEwLTEuOC0xMy4xYy0yLjEtMy4xLTUuNy00LjYtMTAuNi00LjZjLTUuNywwLTEwLjUsMi4yLTE0LjcsNi42DQoJCQlDODAyLjMsOTkuMSw4MDAuMSwxMDIuOCw3OTguMiwxMDcuNXoiLz4NCgkJPHBhdGggZmlsbD0iIzE3MkMzNiIgZD0iTTkzOS41LDc3LjJsNC43LDU2LjFsMjcuNi01Ni4xaDE4LjdsLTM4LjksNzUuM2gtMjMuMmwtNC01OC4ybC0yOC42LDU4LjJoLTIyLjRMODY0LDc3LjJoMjAuOGw0LjgsNTYuMw0KCQkJbDI3LjMtNTYuM0g5MzkuNXoiLz4NCgk8L2c+DQoJPHBvbHlnb24gZmlsbD0iI0JFMjEyOCIgcG9pbnRzPSIxMTIuMywyNTYuOSA0My42LDI1Ni45IDEwMCw0My4zIDE2OC43LDQzLjMgCSIvPg0KCTxwb2x5Z29uIGZpbGw9IiMyNDk4NDciIHBvaW50cz0iMTk3LjcsMjU2LjkgMTI5LDI1Ni45IDE4NS41LDQzLjMgMjU0LjEsNDMuMyAJIi8+DQoJPHBvbHlnb24gZmlsbD0iIzA2NEY4QyIgcG9pbnRzPSIyODMuMSwyNTYuOSAyMTQuNCwyNTYuOSAyNzAuOSw0My4zIDMzOS41LDQzLjMgCSIvPg0KCTxnPg0KCQk8Zz4NCgkJCTxwYXRoIGZpbGw9IiM0RjRGNEYiIGQ9Ik0zODguNSwxOTIuM2MtMy0xLjktNi40LTMuMy0xMC00LjJjLTMuNi0wLjktNy41LTEuMy0xMS42LTEuM2MtNC43LDAtOSwwLjktMTIuOCwyLjYNCgkJCQljLTMuOCwxLjctNyw0LjEtOS43LDcuMWMtMi43LDMtNC43LDYuNS02LjIsMTAuNWMtMS40LDQtMi4yLDguMy0yLjIsMTIuOWMwLDMuMSwwLjUsNi4xLDEuNiw4LjhjMSwyLjgsMi41LDUuMiw0LjQsNy4yDQoJCQkJYzEuOSwyLDQuMiwzLjYsNi45LDQuOGMyLjcsMS4yLDUuNywxLjgsOSwxLjhjMS44LDAsMy4zLDAsNC41LTAuMWMxLjItMC4xLDIuMy0wLjMsMy4yLTAuN2w0LjMtMjAuNmgtMTYuNGwyLjYtMTIuMmgzMS40DQoJCQkJbC04LjksNDIuM2MtMS4xLDAuNC0yLjUsMC45LTQuMSwxLjNjLTEuNiwwLjQtMy40LDAuOC01LjIsMS4xYy0xLjgsMC4zLTMuNywwLjUtNS43LDAuN2MtMiwwLjItMy45LDAuMy01LjgsMC4zDQoJCQkJYy01LjcsMC0xMC45LTAuNy0xNS42LTJjLTQuNy0xLjMtOC43LTMuNC0xMi02LjJjLTMuMy0yLjgtNS45LTYuNC03LjctMTAuN2MtMS44LTQuMy0yLjctOS41LTIuNy0xNS41YzAtNy4xLDEuMS0xMy41LDMuMy0xOS4xDQoJCQkJYzIuMi01LjYsNS40LTEwLjQsOS40LTE0LjRjNC4xLTQsOS03LDE0LjctOS4xYzUuNy0yLjEsMTIuMS0zLjIsMTkuMS0zLjJjNC40LDAsOC44LDAuMywxMy4yLDFzOC42LDEuOCwxMi43LDMuM0wzODguNSwxOTIuM3oiDQoJCQkJLz4NCgkJCTxwYXRoIGZpbGw9IiM0RjRGNEYiIGQ9Ik00MTEuOSwxNzAuMWgxNC45bC0xNy43LDgzLjNoLTE0LjlMNDExLjksMTcwLjF6Ii8+DQoJCQk8cGF0aCBmaWxsPSIjNEY0RjRGIiBkPSJNNDYxLjUsMjQ0LjZoLTAuMmMtMi42LDMuMy01LjMsNS44LTguMSw3LjVjLTIuOCwxLjctNi4yLDIuNi0xMC40LDIuNmMtNS4yLDAtOS40LTEuNC0xMi43LTQuMg0KCQkJCWMtMy4zLTIuOC00LjktNi44LTQuOS0xMi4yYzAtNC43LDEuMi04LjUsMy41LTExLjJzNS4zLTQuNyw4LjgtNi4xYzMuNS0xLjQsNy4zLTIuMiwxMS40LTIuNmM0LjEtMC4zLDcuOS0wLjUsMTEuNC0wLjVoNS4yDQoJCQkJYzAuMi0wLjgsMC40LTEuNiwwLjQtMi40YzAtMC44LDAuMS0xLjYsMC4xLTIuNGMwLTEuNC0wLjMtMi42LTEuMS0zLjZjLTAuNy0xLTEuNi0xLjctMi43LTIuM2MtMS4xLTAuNi0yLjMtMS0zLjctMS4yDQoJCQkJYy0xLjMtMC4yLTIuNy0wLjMtNC0wLjNjLTMuMywwLTYuNiwwLjQtOS43LDEuMmMtMy4xLDAuOC02LjEsMS45LTkuMSwzLjNsMi4xLTExLjljMy4yLTEuMSw2LjQtMiw5LjYtMi42DQoJCQkJYzMuMi0wLjYsNi41LTAuOSw5LjgtMC45YzIuOSwwLDUuNywwLjMsOC4zLDAuOWMyLjcsMC42LDUsMS42LDcuMSwyLjljMiwxLjQsMy43LDMuMiw0LjksNS40YzEuMywyLjMsMS45LDUuMSwxLjksOC40DQoJCQkJYzAsMS4zLTAuMSwyLjktMC40LDQuOWMtMC4zLDItMC43LDQuMy0xLjEsNi43Yy0wLjQsMi40LTAuOSw1LTEuNCw3LjdzLTEsNS40LTEuNiw3LjljLTAuNSwyLjYtMSw1LjEtMS40LDcuNA0KCQkJCWMtMC40LDIuNC0wLjgsNC40LTEsNi4yaC0xMi42TDQ2MS41LDI0NC42eiBNNDM5LjQsMjM3LjhjMCwyLDAuOCwzLjUsMi4zLDQuNWMxLjYsMSwzLjMsMS41LDUuMiwxLjVjMi43LDAsNS4xLTAuNCw2LjktMS4zDQoJCQkJYzEuOS0wLjksMy41LTIuMSw0LjgtMy43YzEuMy0xLjYsMi4zLTMuMywzLjEtNS40YzAuOC0yLDEuNS00LjIsMi4xLTYuNWgtNS4yYy0xLjgsMC0zLjgsMC4xLTYuMSwwLjNjLTIuMywwLjItNC40LDAuNy02LjMsMS41DQoJCQkJYy0xLjksMC44LTMuNiwxLjktNC45LDMuM0M0NDAsMjMzLjUsNDM5LjQsMjM1LjQsNDM5LjQsMjM3Ljh6Ii8+DQoJCQk8cGF0aCBmaWxsPSIjNEY0RjRGIiBkPSJNNDk3LjUsMjA0LjRjMC40LTEuNywwLjctMy4zLDAuOS00LjdjMC4yLTEuNCwwLjQtMi42LDAuNi0zLjVoMTQuNmwtMSw1LjZoMC4yYzIuMS0xLjksNC41LTMuNiw3LjItNC45DQoJCQkJYzIuNy0xLjMsNS43LTIsOS0yYzUuNiwwLDEwLjEsMS42LDEzLjYsNC45YzMuNCwzLjMsNS4xLDcuNyw1LjEsMTMuNGMwLDIuMS0wLjIsNC4zLTAuNyw2LjVjLTAuNCwyLjItMC45LDQuMi0xLjIsNS45bC02LDI3LjgNCgkJCQloLTE0LjlsNS42LTI3YzAuNC0xLjksMC43LTMuOSwxLjEtNS44czAuNi00LDAuNi02LjJjMC0yLjQtMC44LTQuMy0yLjMtNS44Yy0xLjUtMS41LTMuNS0yLjItNS44LTIuMmMtMi42LDAtNC44LDAuNi02LjYsMS43DQoJCQkJYy0xLjgsMS4xLTMuMywyLjUtNC42LDQuM2MtMS4yLDEuNy0yLjIsMy43LTMsNS44Yy0wLjgsMi4xLTEuNCw0LjMtMS44LDYuNGwtNi4xLDI4LjhoLTE0LjlMNDk3LjUsMjA0LjR6Ii8+DQoJCQk8cGF0aCBmaWxsPSIjNEY0RjRGIiBkPSJNNjAyLDIwOS4zYy0zLTEuOS02LjYtMi45LTEwLjktMi45Yy0zLDAtNS42LDAuNi03LjksMS45Yy0yLjMsMS4zLTQuMiwyLjktNS44LDUNCgkJCQljLTEuNiwyLjEtMi44LDQuNC0zLjYsNy4xYy0wLjgsMi42LTEuMiw1LjMtMS4yLDcuOWMwLDEuOSwwLjIsMy43LDAuNiw1LjRjMC40LDEuOCwxLDMuNCwxLjksNC44YzAuOSwxLjQsMi4yLDIuNSwzLjgsMy40DQoJCQkJYzEuNiwwLjksMy43LDEuMyw2LjMsMS4zYzEuOCwwLDMuOS0wLjIsNi0wLjdjMi4xLTAuNSw0LjItMS4yLDYuMS0yLjJsLTEuNywxMS44Yy0yLjMsMS4xLTQuNiwxLjgtNy4xLDIuMg0KCQkJCWMtMi40LDAuMy00LjgsMC41LTcuMywwLjVjLTMuNywwLTcuMS0wLjYtMTAuMS0xLjhjLTMtMS4yLTUuNi0yLjgtNy43LTVjLTIuMS0yLjItMy43LTQuNy00LjktNy44Yy0xLjItMy0xLjctNi40LTEuNy0xMC4xDQoJCQkJYzAtNSwwLjgtOS42LDIuNC0xMy45YzEuNi00LjMsMy45LTgsNi44LTExLjJjMi45LTMuMiw2LjUtNS43LDEwLjctNy40YzQuMi0xLjgsOC44LTIuNywxMy45LTIuN2MyLjgsMCw1LjUsMC4yLDguMSwwLjcNCgkJCQljMi42LDAuNCw0LjgsMSw2LjgsMS42TDYwMiwyMDkuM3oiLz4NCgkJCTxwYXRoIGZpbGw9IiM0RjRGNEYiIGQ9Ik02MTkuNiwyMjkuNGMwLDUuMywxLjQsOS4xLDQuMSwxMS4yYzIuNywyLjIsNi43LDMuMiwxMS44LDMuMmMzLjEsMCw2LjEtMC40LDktMS4xDQoJCQkJYzIuOS0wLjcsNS43LTEuNyw4LjYtM2wtMS45LDExLjhjLTIuOSwwLjktNS45LDEuNy04LjksMi4zYy0zLjEsMC42LTYuMiwwLjktOS4zLDAuOWMtNC4xLDAtNy45LTAuNS0xMS4zLTEuNQ0KCQkJCWMtMy40LTEtNi4zLTIuNS04LjctNC42Yy0yLjQtMi4xLTQuMy00LjctNS42LTcuOGMtMS4zLTMuMS0yLTYuOC0yLTExLjFjMC00LjQsMC44LTguOCwyLjQtMTIuOXMzLjktNy45LDYuOC0xMS4yDQoJCQkJYzIuOS0zLjMsNi4zLTUuOSwxMC4zLTcuOHM4LjMtMi45LDEzLTIuOWMzLjYsMCw2LjgsMC40LDkuNiwxLjNjMi45LDAuOSw1LjMsMi4yLDcuNCw0LjFjMi4xLDEuOCwzLjcsNC4xLDQuOCw2LjgNCgkJCQlzMS43LDUuOSwxLjcsOS42YzAsMi4xLTAuMSw0LjMtMC40LDYuNGMtMC4zLDIuMS0wLjYsNC4yLTEuMSw2LjRINjE5LjZ6IE02NDYuOCwyMTkuMmMwLjItMS4zLDAuMy0yLjYsMC4zLTMuOQ0KCQkJCWMwLTMuMS0wLjgtNS41LTIuNC03LjFjLTEuNi0xLjYtMy45LTIuNS03LjEtMi41Yy00LjYsMC04LjEsMS4zLTEwLjQsMy44Yy0yLjQsMi41LTQuMyw1LjctNS43LDkuN0g2NDYuOHoiLz4NCgkJPC9nPg0KCTwvZz4NCjwvZz4NCjwvc3ZnPg0K";
        echo $data;
        die;
    }
}
