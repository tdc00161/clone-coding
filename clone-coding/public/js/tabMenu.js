const urlParams = new URLSearchParams(window.location.search);
console.log(urlParams)
const activeTab = urlParams.get('tab');

// 초기에 활성화할 탭 설정
if (activeTab) {
    document.getElementById(activeTab).classList.add('active');
} else {
    document.getElementById('tab1').classList.add('active');
}

// 탭 열기 함수
function openTab(evt, tabName) {
    // 모든 탭 컨텐츠 비활성화
    document.querySelectorAll('.tab-content').forEach(tabContent => {
        tabContent.classList.remove('active');
    });

    // 선택한 탭 활성화
    document.getElementById(tabName).classList.add('active');
}