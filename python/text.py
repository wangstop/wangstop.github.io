# import time
# from selenium import webdriver
# from bs4 import BeautifulSoup

# driver = webdriver.Chrome(executable_path=r'D:\python\chromedriver_win32\chromedriver') # chrome瀏覽器
# driver.get('https://www.youtube.com/?gl=TW&tab=r11')

# time.sleep(2)

# for i in range(10):  # 進行十次
#     driver.execute_script('window.scrollTo(0, document.querySelector("ytd-app").clientHeight);')  # 重複往下捲動
#     time.sleep(1)  # 每次執行打瞌睡一秒

# pageSource = driver.page_source
# # print(pageSource)

# soup = BeautifulSoup(pageSource, 'html.parser')  # 解析器接手
# results = soup.select('yt-formatted-string#video-title')
# for item in results:
#     print(item.text)

# driver.quit()  # 關閉瀏覽器


for i in range(1,10):
    for j in range(1,10):
        print('%d*%d=%d ' %(i,j,i*j),end=' ')
        
    print('\n')
   