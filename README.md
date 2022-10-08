# Laravel_Bquiz01_202210_learn
跟著美克叔叔實驗室學習Laravel，從202210開始。
# 參考連結
- [從零開始學Laravel 系列影片](https://www.youtube.com/playlist?list=PLL26U2k-yzXtUSppbrYKYYiGDP2kHOaUC)
- [從零開始學Laravel 系列Github](https://github.com/mackliu/laravel-bquiz01.git)
- [jQuery CDN](https://releases.jquery.com/)
- [Bootstrap CDN](https://getbootstrap.com/docs/5.2/getting-started/introduction/#cdn-links)

# 學習紀錄
- 2022/10/8
- Laravel Controller 介紹
- 請求=>路由=>視圖=>回應
- 請求=>路由=>控制器=>視圖=>回應
- 請求=>路由=>控制器=>模型=>資料庫=>模型=>控制器=>視圖=>回應
- 建議初學者，一個功能，對應一個資料表，對應一個控制器
- 路由使用redirect方法將/admin直接導向/admin/tiltle
- 路由中變數越多(不確定性)，排列越下面
- 開始使用Controller 說明7 與8 不同的使用方式
- 在某些書的作者想在8 之後的版本依舊使用7 以前方法，需要到RouteServiceProvider.php做修改
- 使用Route Groups Prefixes 建立admin 導向路徑
- 完成在路由連結控制器
- 介紹Resource Controllers 預設方法
- 
- 2022/10/7
- 使用Bootstrap Modal 載入新增視窗
- Bootstrap 5 Javascript 需要建立新物件方式呼叫Modal
- Modal 隱藏時，清除資源、刪除內容
- 在路由直接帶參數，完成不同資料帶入同一頁面
- 後台初步切版告一段落
- 
- 2022/10/6
- 使用Bootstrap 完成版型配置
- 乙級題型一後台沒有首頁，重新調整路由路徑
- 進階用法，連結同版面，在路由設定變數ex:localhost/admin/{name}，暫不使用Contrller方式
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
- 個人改用Laravel 9 +Bootstrap 5 學習
- 安裝Laravel 需耐心等待，避免安裝不完全
- 