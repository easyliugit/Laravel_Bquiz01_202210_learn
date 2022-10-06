# Laravel_Bquiz01_202210_learn
跟著美克叔叔實驗室學習Laravel，從202210開始。
# 參考連結
- [從零開始學Laravel 系列影片](https://www.youtube.com/playlist?list=PLL26U2k-yzXtUSppbrYKYYiGDP2kHOaUC)
- [從零開始學Laravel 系列Github](https://github.com/mackliu/laravel-bquiz01.git)
- [jQuery CDN](https://releases.jquery.com/)
- [Bootstrap CDN](https://getbootstrap.com/docs/5.2/getting-started/introduction/#cdn-links)

# 學習紀錄
- 2022/10/6
- 使用Bootstrap 完成版型配置
- 乙級題型一後台沒有首頁，重新調整路由路徑
- 進階用法，連結同版面，在路由設定變數ex:http://localhost/admin/{name}，暫不使用Contrller方式
- 選單改用引入@include方式
- 使用Bootstrap 完成主要內容區域
- 
- 2022/10/5
- Laravel 前端模板Blade，
- 使用- Laravel 方便結合Vue.js 使用，提供在起始加上"@"可忽略原{{ }}"用法ex:@{{ $values }}
- 使用asset()相對路徑找到css外部檔案
- css 使用外部引入時，檔案須放置於public目錄下，並將路徑使用"{{ asset('css/style.css') }}"方法寫入，此方法Laravel 會使用相對路徑找到外部檔案
- 套用@extends，套入@section=>@yield
- 
- 2022/10/4
- 美克叔叔採用網頁設計乙級題組一作為範例來講解Laravel 的操作
- 美克叔叔盡量用Laravel 4~8 都有的方法教學
- 個人改用Laravel 9 學習
- 安裝Laravel 需耐心等待，避免安裝不完全
- 