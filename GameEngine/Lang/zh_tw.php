<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             TRAVIANZ                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (TravianZ)                                 //
//                              - TravianZ = Travian Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//                                Adding tasks, constructions and artefact  by: Armando             //
//                                Modified , added , fixed , implementd  by: Shadow and ronix       //
//////////////////////////////////////////////////////////////////////////////////////////////////////
									//                         //
									//         Chinese         //
									//   Author: muchen.fan    //
									//                         //
									/////////////////////////////

//MAIN MENU
define("TRIBE1","羅馬");
define("TRIBE2","條頓");
define("TRIBE3","高盧");
define("TRIBE4","自然");
define("TRIBE5","納塔");
define("TRIBE6","野獸");

define("HOME","首頁");
define("INSTRUCT","說明");
define("ADMIN_PANEL","管理員面板");
define("MASS_MESSAGE","群發消息");
define("LOGOUT","登出");
define("PROFILE","檔案");
define("SUPPORT","支持");
define("UPDATE_T_10","更新前十");
define("SYSTEM_MESSAGE","系統資訊");
define("TRAVIAN_PLUS","Travian <b><span class=\"plus_g\">P</span><span class=\"plus_o\">l</span><span class=\"plus_g\">u</span><span class=\"plus_o\">s</span></span></span></b>");
define("CONTACT","聯繫我們");
define("GAME_RULES","遊戲規則");

//MENU
define("REG","註冊");
define("FORUM","論壇");
define("CHAT","聊天");
define("IMPRINT","資訊");
define("MORE_LINKS","更多連結");
define("TOUR","觀光");


//ERRORS
define("USRNM_EMPTY","(使用者名稱為空)");
define("USRNM_TAKEN","(使用者名稱已被占用)");
define("USRNM_SHORT","(使用者名稱最少 ".USRNM_MIN_LENGTH." 個字元)");
define("USRNM_CHAR","(含有不可用字元)");
define("PW_EMPTY","(密碼為空)");
define("PW_SHORT","(使用者名稱最少 ".PW_MIN_LENGTH." 個字元)");
define("PW_INSECURE","(密碼不安全，請採用更複雜的密碼)");
define("EMAIL_EMPTY","(信箱地址為空)");
define("EMAIL_INVALID","(不可用的信箱地址)");
define("EMAIL_TAKEN","(信箱地址已被使用)");
define("TRIBE_EMPTY","<li>請選擇一個種族。</li>");
define("AGREE_ERROR","<li>若要註冊，請先同意遊戲規則和T&C。</li>");
define("LOGIN_USR_EMPTY","請輸入使用者名稱。");
define("LOGIN_PASS_EMPTY","請輸入密碼。");
define("EMAIL_ERROR","信箱地址未知。");
define("PASS_MISMATCH","密碼不匹配。");
define("ALLI_OWNER","在刪除前，請先指派新盟主。");
define("SIT_ERROR","代管人已經設置或不存在。");
define("USR_NT_FOUND","使用者名稱不存在。");
define("LOGIN_PW_ERROR","密碼錯誤。");
define("WEL_TOPIC","實用訊息");
define("ATAG_EMPTY","標籤為空");
define("ANAME_EMPTY","名稱為空");
define("ATAG_EXIST","標籤已占用");
define("ANAME_EXIST","名稱已占用");
define("ALREADY_ALLY_MEMBER","你已經在聯盟中");
define("ALLY_TOO_LOW", "你必須擁有3級或更高等級的大使館");
define("USER_NOT_IN_YOUR_ALLY","該用戶不在你的聯盟中。");
define("CANT_EDIT_YOUR_PERMISSIONS","你不能更改自己的權限");
define("CANT_EDIT_LEADER_PERMISSIONS","盟主的權限不能更改。");
define("NO_PERMISSION", "你的權限不夠。");
define("NAME_OR_DIPL_EMPTY", "名稱或外交關係為空");
define("ALLY_DOESNT_EXISTS","聯盟不存在");
define("CANNOT_INVITE_SAME_ALLY","你不能邀請你自己的聯盟");
define("WRONG_DIPLOMACY","選擇錯誤");
define("INVITE_ALREADY_SENT","協定邀請已發出、或對方已發出邀請、或你已經與對方存在協定關係。");
define("INVITE_SENT","邀請已發出");
define("DECLARED_WAR_ON","宣告戰爭，向");
define("OFFERED_NON_AGGRESION_PACT_TO","發出互不侵略協定邀請，向");
define("OFFERED_CONFED_TO","發出聯合邀請，向");
define("ALLY_TOO_MUCH_PACTS","你不能發出更多此類協定的邀請、或聯盟已經到達簽訂此種協定數量的上限。");
define("ALLY_PERMISSIONS_UPDATED","權限已更新");
define("ALLY_FORUM_LINK_UPDATED", "論壇連結已更新");
define("NO_FORUMS_YET","目前還沒有論壇");
define("ALLY_USER_KICKED"," 已經被踢出聯盟");
define("NOT_OPENED_YET","伺服器尚未啟動");
define("REGISTER_CLOSED","註冊已關閉，你不能在此伺服器上註冊。");
define("NAME_EMPTY","請輸入名稱");
define("NAME_NO_EXIST","該名稱不存在 ");
define("ID_NO_EXIST","該ID不存在 ");
define("SAME_NAME","你不能邀請你自己");
define("ALREADY_INVITED"," 已被邀請");
define("ALREADY_IN_ALLY"," 已經在聯盟中");
define("ALREADY_IN_AN_ALLY"," 已經在其他聯盟中");
define("NAME_OR_TAG_CHANGED","名稱或標籤已被更改");
define("VAC_MODE_WRONG_DAYS","你輸入了錯誤的天數");

//COPYRIGHT
define("TRAVIAN_COPYRIGHT","TravianZ 100% 開源 Travian 複製。");

//BUILD.TPL
define("CUR_PROD","當前產量");
define("NEXT_PROD","產量，等級 ");
define("CONSTRUCT_BUILD","建造建築");

//BUILDINGS
define("B1","伐木場");
define("B1_DESC","伐木場的工人們砍倒樹木，生產木材。伐木場的等級越高，木材的產能越高。");
define("B2","黏土坑");
define("B2_DESC","黏土坑生產黏土。黏土坑的等級越高，黏土的產能越高。");
define("B3","鐵礦場");
define("B3_DESC","在這裡，礦工們挖出寶貴的金屬。鐵礦場的等級越高，鐵礦的產能越高。");
define("B4","農田");
define("B4_DESC","你的人民和士兵的食物在這裡產出。農田的等級越高，糧食的產能越高。");

//DORF1
define("LUMBER","木材");
define("CLAY","黏土");
define("IRON","鐵礦");
define("CROP","糧食");
define("LEVEL","等級");
define("CROP_COM",CROP."消耗");
define("PER_HR","每小時");
define("PROD_HEADER","產量");
define("MULTI_V_HEADER","村民");
define("ANNOUNCEMENT","公告");
define("GO2MY_VILLAGE","返回我的村莊");
define("VILLAGE_CENTER","村莊大樓");
define("FINISH_GOLD","將使用 2 金幣瞬間完成本村的所有建築和研究隊列");
define("WAITING_LOOP","(隊列中)");
define("CROP_NEGATIVE","你的糧食產量為負，因此不可能抵達需求的糧食數目。");
define("HRS","(小時)");
define("DONE_AT","完成於");
define("CANCEL","取消");
define("LOYALTY","忠誠度");
define("CALCULATED_IN","響應延遲");
define("SEVER_TIME","伺服器時間:");
define("HI","嗨");
define("P_IN","在");

//QUEST
define("Q_CONTINUE","繼續下一個任務。");
define("Q_REWARD","你的獎勵:");
define("Q_BUTN","完成任務");
define("Q0","歡迎來到");
define("Q0_DESC","嘿，看起來你就是這座小村莊的首領。在剛開始的這段時間裡我來指導你如何發展你的部落。");
define("Q0_OPT1","開始任務");
define("Q0_OPT2","我想自己看看");
define("Q0_OPT3","跳過任務");

define("Q1","任務 1: 伐木場");
define("Q1_DESC","你的村莊裡有四片綠色的森林。在一片森林中建造一個伐木場，因為木材是我們新聚居點的重要資源。");
define("Q1_ORDER","目標:<\/p>建造一個伐木場。");
define("Q1_RESP","就是這樣，現在村莊能生產更多木材了。我幫點小忙，把建造瞬間完成。");
define("Q1_REWARD","伐木場瞬間建造完成。");

define("Q2","任務 2: 糧食");
define("Q2_DESC","你的人民辛勤勞作，他們的伙食保障至關重要。開發一片農田來滿足糧食需求。當建築完成了再回來。");
define("Q2_ORDER","目標:<\/p>開發一片農田。");
define("Q2_RESP","很好，你的人民吃得飽飯了。");
define("Q2_REWARD","你的獎勵:<\/p>1 天 Travian");

define("Q3","任務 3: 你村莊的名字");
define("Q3_DESC","Creative as you are you can grant your village the ultimate name.<br \/><br \/>Click on 'profile' in the left hand menu and then select 'change profile'...");
define("Q3_ORDER","Order:<\/p>Change your village's name to something nice.");
define("Q3_RESP","Wow, a great name for their village. It could have been the name of my village!...");

define("Q4","任務 4: Other Players");
define("Q4_DESC","In ". SERVER_NAME ." you play along with billions of other players. Click 'statistics' in the top menu to look up your rank and enter it here.");
define("Q4_ORDER","Order:<\/p>Look for your rank in the statistics and enter it here.");
define("Q4_BUTN","complete task");
define("Q4_RESP","Exactly! That's your rank.");

define("Q5","任務 5: Two Building Orders");
define("Q5_DESC","Build an iron mine and a clay pit. Of iron and clay one can never have enough.");
define("Q5_ORDER","Order:<\/p><ul><li>Extend one iron mine.<\/li><li>Extend one clay pit.<\/li><\/ul>");
define("Q5_RESP","As you noticed, building orders take rather long. The world of ". SERVER_NAME ." will continue to spin even if you are offline. Even in a few months there will be many new things for you to discover.<br \/><br \/>The best thing to do is occasionally checking your village and giving you subjects new tasks to do.");

define("Q6","任務 6: Messages");
define("Q6_DESC","You can talk to other players using the messaging system. I sent a message to you. Read it and come back here.<br \/><br \/>P.S. Don't forget: on the left the reports, on the right the messages.");
define("Q6_ORDER","Order:<\/p>Read your new message.");
define("Q6_RESP","You received it? Very good.<br \/><br \/>Here is some Gold. With Gold you can do several things, e.g. extend your   in the left hand menu.");
define("Q6_RESP1","-Account or increase your resource production.To do so click ");
define("Q6_RESP2","in the left hand menu.");
define("Q6_SUBJECT","Message From The Taskmaster");
define("Q6_MESSAGE","You are to be informed that a nice reward is waiting for you at the taskmaster.<br /><br />Hint: The message has been generated automatically. An answer is not necessary.");

define("Q7","任務 7: One Each!");
define("Q7_DESC","Now we should increase your resource production a bit. Build an additional woodcutter, clay pit, iron mine and cropland to level 1.");
define("Q7_ORDER","Order:<\/p>Extend one more of each resource tile to level 1.");
define("Q7_RESP","Very good, great develop of resources production.");

define("Q8","任務 8: Huge Army!");
define("Q8_DESC","Now I've got a very special quest for you. I am hungry. Give me 200 crop!<br \/><br \/>In return I will try to organize a huge army to protect your village.");
define("Q8_ORDER","Order:<\/p>Send 200 crop to the taskmaster.");
define("Q8_BUTN","Send crop");
define("Q8_NOCROP","No Enough Crop!");

define("Q9","任務 9: Everything to 1.");
define("Q9_DESC","In Travian there is always something to do! While you are waiting for incoming the huge army, Now we should increase your resource production a bit. Extend all your resource tiles to level 1.");
define("Q9_ORDER","Order:<\/p>Extend all resource tiles to level 1.");
define("Q9_RESP","Very good, your resource production just thrives.<br \/><br \/>Soon we can start with constructing buildings in the village.");

define("Q10","任務 10: Dove of Peace");
define("Q10_DESC","The first days after signing up you are protected against attacks by your fellow players. You can see how long this protection lasts by adding the code <b>[#0]<\/b> to your profile.");
define("Q10_ORDER","Order:<\/p>Write the code <b>[#0]<\/b> into your profile by adding it to one of the two description fields.");
define("Q10_RESP","Well done! Now everyone can see what a great warrior the world is approached by.");
define("Q10_REWARD","Your reward:<\/p>2 day Travian");

define("Q11","任務 11: Neighbours!");
define("Q11_DESC","Around you, there are many different villages. One of them is named. ");
define("Q11_DESC1"," Click on 'map' in the header menu and look for that village. The name of your neighbours' villages can be seen when hovering your mouse over any of them.");
define("Q11_ORDER","Order:</p>Look for the coordinates of ");
define("Q11_ORDER1","and enter them here.");
define("Q11_RESP","Exactly, there ");
define("Q11_RESP1"," Village! As many resources as you reach this village. Well, almost as much ...");
define("Q11_BUTN","complete task");

define("Q12","任務 12: Cranny");
define("Q12_DESC","It's getting time to erect a cranny. The world of <?php echo SERVER_NAME; ?> is dangerous.<br \/><br \/>Many players live by stealing other players' resources. Build a cranny to hide some of your resources from enemies.");
define("Q12_ORDER","Order:<\/p>Construct a Cranny.");
define("Q12_RESP","Well done, now it's way harder for your mean fellow players to plunder your village.<br \/><br \/>If under attack, your villagers will hide the resources in the Cranny all on their own.");

define("Q13","任務 13: To Two.");
define("Q13_DESC","In <?php echo SERVER_NAME; ?> there is always something to do! Extend one woodcutter, one clay pit, one iron mine and one cropland to level 2 each.");
define("Q13_ORDER","Order:<\/p>Extend one of each resource tile to level 2.");
define("Q13_RESP","Very good, your village grows and thrives!");

define("Q14","任務 14: Instructions");
define("Q14_DESC","In the ingame instructions you can find short information texts about different buildings and types of units.<br \/><br \/>Click on 'instructions' at the left to find out how much lumber is required for the barracks.");
define("Q14_ORDER","Order:<\/p>Enter how much lumber barracks cost");
define("Q14_BUTN","complete task");
define("Q14_RESP","Exactly! Barracks cost 210 lumber.");

define("Q15","任務 15: Main Building");
define("Q15_DESC","Your master builders need a main building level 3 to erect important buildings such as the marketplace or barracks.");
define("Q15_ORDER","Order:<\/p>Extend your main building to level 3.");
define("Q15_RESP","Well done. The main building level 3 has been completed.<br><br>With this upgrade your master builders cannot only construct more types of buildings but also do so faster.");

define("Q16","任務 16: Advanced!");
define("Q16_DESC","Look up your rank in the player statistics again and enjoy your progress.");
define("Q16_ORDER","Order:<\/p>Look for your rank in the statistics and enter it here.");
define("Q16_RESP","Well done! That's your current rank.");

define("Q17","任務 17: Weapons or Dough");
define("Q17_DESC","Now you have to make a decision: Either trade peacefully or become a dreaded warrior.<br \/><br \/>For the marketplace you need a granary, for the barracks you need a rally point.");
define("Q17_BUTN","Economy");
define("Q17_BUTN1","Military");

define("Q18","任務 18: Military");
define("Q18_DESC","A brave decision. To be able to send troops you need a rally point.<br \/><br \/>The rally point must be built on a specific building site. The ");
define("Q18_DESC1"," building site.");
define("Q18_DESC2"," is located on the right side of the main building, slightly below it. The building site itself is curved.");
define("Q18_ORDER","Order:<\/p>Construct a rally point.");
define("Q18_RESP","Your rally point has been erected! A good move towards world domination!");

define("Q19","任務 19: Barracks");
define("Q19_DESC","Now you have a main building level 3 and a rally point. That means that all prerequisites for building barracks have been fulfilled.<br><br>You can use the barracks to train troops for fighting.");
define("Q19_ORDER","Order:<\/p>Construct barracks.");
define("Q19_RESP","Well done... The best instructors from the whole country have gathered to train your men\u2019s fighting skills to top form.");

define("Q20","任務 20: Train.");
define("Q20_DESC","Now that you have barracks you can start training troops. Train two ");
define("Q20_ORDER","Please train 2 ");
define("Q20_RESP","The foundation for your glorious army has been laid.<br \/><br \/>Before sending your army off to plunder you should check with the.");
define("Q20_RESP1","Combat Simulator");
define("Q20_RESP2","to see how many troops you need to successfully fight one rat without losses.");

define("Q21","任務 18: Economy");
define("Q21_DESC","Trade & Economy was your choice. Golden times await you for sure!");
define("Q21_ORDER","Order:<\/p>Construct a Granary.");
define("Q21_RESP","Well done! With the Granary you can store more wheat.");

define("Q22","任務 19: Warehouse");
define("Q22_DESC","Not only Crop has to be saved. Other resources can go to waste as well if they are not stored correctly. Construct a Warehouse!");
define("Q22_ORDER","Order:<\/p>Construct Warehouse.");
define("Q22_RESP",";Well done, your Warehouse is complete...&rdquo;<\/i><br \/>Now you have fulfilled all prerequisites required to construct a Marketplace.");

define("Q23","任務 20: Marketplace.");
define("Q23_DESC",";Construct a Marketplace so you can trade with your fellow players.");
define("Q23_ORDER","Order:<\/p>Please build a Marketplace.");
define("Q23_RESP",";The Marketplace has been completed. Now you can make offers of your own and accept foreign offers! When creating your own offers, you should think about offering what other players need most to get more profit.");

define("Q24","任務 21: Everything to 2.");
define("Q24_DESC","Now we should increase your resource production a bit. Build an additional woodcutter, clay pit, iron mine and cropland to level 1.");
define("Q24_ORDER","Order:<\/p>Extend all resource tiles to level 2.");
define("Q24_RESP","Congratulations! Your village grows and thrives...");

define("Q28","任務 22: Alliance.");
define("Q28_DESC","Teamwork is important in Travian. Players who work together organise themselves in alliances. Get an invitation from an alliance in your region and join this alliance. Alternatively, you can found your own alliance. To do this, you need a level 3 embassy.");
define("Q28_ORDER","Order:<\/p>Join an alliance or found one on your own.");
define("Q28_RESP","Is good! Now you're in a union called");
define("Q28_RESP1",", and you're a member of their alliance with the faster you'll progress...");

define("Q29","任務 23: Main Building to Level 5");
define("Q29_DESC","To be able to build a palace or residence, you will need a main building at level 5.");
define("Q29_ORDER","Order:<\/p>Upgrade your main building to level 5.");
define("Q29_RESP","The main building is level 5 now and you can build palace or residence...");

define("Q30","任務 24: Granary to Level 3.");
define("Q30_DESC","That you do not lose crop, you should upgrade your granary.");
define("Q30_ORDER","Order:<\/p>Upgrade your granary to level 3.");
define("Q30_RESP","Granary is level 3 now...");

define("Q31","任務 25: Warehouse to Level 7");
define("Q31_DESC"," To make sure your resources won't overflow, you should upgrade your warehouse.");
define("Q31_ORDER","Order:<\/p>Upgrade your warehouse to level 7.");
define("Q31_RESP","Warehouse has upgraded to level 7...");

define("Q32","任務 26: All to five!");
define("Q32_DESC","You will always need more resources. Resource tiles are quite expensive but will always pay out in the long term.");
define("Q32_ORDER","Order:<\/p>Upgrade all resources tiles to level 5.");
define("Q32_RESP","All resources are at level 5, very good, your village grows and thrives!");

define("Q33","任務 27: Palace or Residence?");
define("Q33_DESC","To found a new village, you will need settlers. Those you can train in either a palace or a residence.");
define("Q33_ORDER","Order:<\/p>Build a palace or residence to level 10.");
define("Q33_RESP","had reached to level 10, you can now train settlers and found your second village. Notice the cultural points...");

define("Q34","任務 28: 3 settlers.");
define("Q34_DESC","To found a new village, you will need settlers. They can be trained  in either a palace or a residence.");
define("Q34_ORDER","Order:<\/p>Train 3 settlers.");
define("Q34_RESP","3 settlers were trained. To found new village you need at least");
define("Q34_RESP1","culture points...");

define("Q35","任務 29: New Village.");
define("Q35_DESC","There are a lot of empty tiles on the map. Find one that suits you and found a new village");
define("Q35_ORDER","Order:<\/p>Found a new village.");
define("Q35_RESP","I am proud of you! Now you have two villages and have all the possibilities to build a mighty empire. I wish you luck with this.");

define("Q36"," 任務 30: Build a ");
define("Q36_DESC","Now that you have trained some soldiers, you should build a ");
define("Q36_DESC1"," too. It increases the base defence and your soldiers will receive a defensive bonus.");
define("Q36_ORDER","Order:<\/p>Build a ");
define("Q36_RESP","That's what I'm talking about. A ");
define("Q36_RESP1"," Very useful. It increases the defence of the troops in the village.");

define("Q37","Tasks");
define("Q37_DESC","All tasks achieved!");

define("OPT3","Resource overview");
define("T","Your resource deliveries");
define("T1","Delivery");
define("T2","Delivery time");
define("T3","Status");
define("T4","fetch");
define("T5","fetched");
define("T6","on hold");
define("T7","1 day Travian ");
define("T8","2 days Travian ");

//Quest 25
define("Q25_7","任務 7: Neighbours!");
define("Q25_7_DESC","Around you, there are many different villages. One of them is named. ");
define("Q25_7_DESC1","Click 'Map' in the head menu and look for that village. The name of your neighbours' villages can be seen once you hover your mouse over any of them.");
define("Q25_7_ORDER","<\/p><b>Order:</b><br>Look for the coordinates of ");
define("Q25_7_ORDER1","and enter them here.");
define("Q25_7_RESP","Exactly, there ");
define("Q25_7_RESP1"," Village! As many resources as you reach this village. Well, almost as much ...");

define("Q25_8","任務 8: Huge Army!");
define("Q25_8_DESC","Now I've got a very special Quest for you. I am hungry. Give me 200 crop!<br \/><br \/>In return I will try to organize a huge army to protect your village.");
define("Q25_8_ORDER","Order:<\/p>Send 200 crop to the taskmaster.");
define("Q25_8_BUTN","Send crop");
define("Q25_8_NOCROP","No Enough Crop!");

define("Q25_9","任務 9: One each!");
define("Q25_9_DESC","In " . SERVER_NAME . " there is always something to do! While you are waiting for your new army,<br \/><br \/>extend one additional woodcutter, clay pit, iron mine and cropland to level 1");
define("Q25_9_ORDER","Order:<\/p>Extend one more of each resource tile to level 1.");
define("Q25_9_RESP","Very good, great development of resource production.");

define("Q25_10","任務 10: Comming Soon!");
define("Q25_10_DESC","Now there is time for a small break until the gigantic army I sent you arrives.<br \/><br \/>Until then you can explore the map or extend a few resource tiles.");
define("Q25_10_ORDER","Order:<\/p>Wait for the taskmaster's army to arrive");
define("Q25_10_RESP","Now a huge army from taskmaster has arrive to protect your village");
define("Q25_10_REWARD","Your reward:<\/p>2 days more of Travian");

define("Q25_11","任務 11: Reports");
define("Q25_11_DESC","Every time something important happens to your account you will receive a report.<br \/><br \/>You can see these by clicking on the left half of the 5th button (from left to right). Read the report and come back here.");
define("Q25_11_ORDER","Order:<\/p>Read your latest report.");
define("Q25_11_RESP","You received it? Very good. Here is your reward.");

define("Q25_12","任務 12: Everything to 1.");
define("Q25_12_DESC","Now we should increase your resource production a bit.");
define("Q25_12_ORDER","Order:<\/p>Extend all resource tiles to level 1.");
define("Q25_12_RESP","Very good, your resource production just thrives.<br \/><br \/>Soon we can start with constructing buildings in the village.");

define("Q25_13","任務 13: Dove of Peace");
define("Q25_13_DESC","The first days after signing up you are protected against attacks by your fellow players. You can see how long this protection lasts by adding the code <b>[#0]<\/b> to your profile.");
define("Q25_13_ORDER","Order:<\/p>Write the code <b>[#0]<\/b> into your profile by adding it to one of the two description fields.");
define("Q25_13_RESP","Well done! Now everyone can see what a great warrior the world is approached by.");

define("Q25_14","任務 14: Cranny");
define("Q25_14_DESC","It's getting time to erect a cranny. The world of <b>" . SERVER_NAME. "</b> is dangerous.<br \/><br \/>Many players live by stealing other players' resources. Build a cranny to hide some of your resources from enemies.");
define("Q25_14_ORDER","Order:<\/p>Construct a Cranny.");
define("Q25_14_RESP","Well done, now it's way harder for your mean fellow players to plunder your village.<br \/><br \/>If under attack, your villagers will hide the resources in the Cranny all on their own.");

define("Q25_15","任務 15: To Two.");
define("Q25_15_DESC","In <b>" . SERVER_NAME. "</b> there is always something to do! Extend one woodcutter, one clay pit, one iron mine and one cropland to level 2 each.");
define("Q25_15_ORDER","Order:<\/p>Extend one of each resource tile to level 2.");
define("Q25_15_RESP","Very good, your village grows and thrives!");

define("Q25_16","任務 16: Instructions");
define("Q25_16_DESC","In the ingame instructions you can find short information texts about different buildings and types of units.<br \/><br \/>Click on 'instructions' at the left to find out how much lumber is required for the barracks.");
define("Q25_16_ORDER","Order:<\/p>Enter how much lumber barracks cost");
define("Q25_16_BUTN","complete task");
define("Q25_16_RESP","Exactly! Barracks cost 210 lumber.");

define("Q25_17","任務 17: Main Building");
define("Q25_17_DESC","Your master builders need a main building level 3 to erect important buildings such as the marketplace or barracks.");
define("Q25_17_ORDER","Order:<\/p>Extend your main building to level 3.");
define("Q25_17_RESP","Well done. The main building level 3 has been completed.<br><br>With this upgrade your master builders can construct more types of buildings and also do so faster.");

define("Q25_18","任務 18: Advanced!");
define("Q25_18_DESC","Look up your rank in the player statistics again and enjoy your progress.");
define("Q25_18_ORDER","Order:<\/p>Look for your rank in the statistics and enter it here.");
define("Q25_18_RESP","Well done! That's your current rank.");

define("Q25_19","任務 19: Weapons or Dough");
define("Q25_19_DESC","Now you have to make a decision: Either trade peacefully or become a dreaded warrior.<br \/><br \/>For the marketplace you need a granary, for the barracks you need a rally point.");
define("Q25_19_BUTN","Economy");
define("Q25_19_BUTN1","Military");

define("Q25_20","任務 19: Economy");
define("Q25_20_DESC","Trade & Economy was your choice. Golden times await you for sure!");
define("Q25_20_ORDER","Order:<\/p>Construct a Granary.");
define("Q25_20_RESP","Well done! With the Granary you can store more wheat.");

define("Q25_21","任務 20: Warehouse");
define("Q25_21_DESC","Not only Crop has to be saved. Other resources can go to waste as well if they are not stored correctly. Construct a Warehouse!");
define("Q25_21_ORDER","Order:<\/p>Construct Warehouse.");
define("Q25_21_RESP",";Well done, your Warehouse is complete...&rdquo;<\/i><br \/>Now you have fulfilled all prerequisites required to construct a Marketplace.");

define("Q25_22","任務 21: Marketplace.");
define("Q25_22_DESC",";Construct a Marketplace so you can trade with your fellow players.");
define("Q25_22_ORDER","Order:<\/p>Please build a Marketplace.");
define("Q25_22_RESP","The Marketplace has been completed. Now you can make offers of your own and accept foreign offers! When creating your own offers, you should think about offering what other players need most to get more profit.");

define("Q25_23","任務 19: Military");
define("Q25_23_DESC","A brave decision. To be able to send troops you need a rally point.<br \/><br \/>The rally point must be built on a specific building site. The ");
define("Q25_23_DESC1"," building site.");
define("Q25_23_DESC2"," is located on the right side of the main building, slightly below it. The building site itself is curved.");
define("Q25_23_ORDER","Order:<\/p>Construct a rally point.");
define("Q25_23_RESP","Your rally point has been erected! A good move towards world domination!");

define("Q25_24","任務 20: Barracks");
define("Q25_24_DESC","Now you have a main building level 3 and a rally point. That means that all prerequisites for building barracks have been fulfilled.<br><br>You can use the barracks to train troops for fighting.");
define("Q25_24_ORDER","Order:<\/p>Construct barracks.");
define("Q25_24_RESP","Well done... The best instructors from the whole country have gathered to train your men\u2019s fighting skills to top form.");

define("Q25_25","任務 21: Train.");
define("Q25_25_DESC","Now that you have barracks you can start training troops. Train two ");
define("Q25_25_ORDER","Please train 2 ");
define("Q25_25_RESP","The foundation for your glorious army has been laid.<br \/><br \/>Before sending your army off to plunder you should check with the");
define("Q25_25_RESP1","Combat Simulator");
define("Q25_25_RESP2","to see how many troops you need to successfully fight one rat without losses.");

define("Q25_26","任務 22: Everything to 2.");
define("Q25_26_DESC","Now it's time again to extend the cornerstones of might and wealth! This time level 1 is not enough... it will take a while but in the end it will be worth it. Extend all your resource tiles to level 2!");
define("Q25_26_ORDER","Order:<\/p>Extend all resource tiles to level 2.");
define("Q25_26_RESP","Congratulations! Your village grows and thrives...");

define("Q25_27","任務 23: Friends.");
define("Q25_27_DESC","As single player it is hard to compete with attackers. It is to your advantage if your neighbours like you.<br \/><br \/>It is even better if you play together with friends. Did you know that you can earn <img src='img/x.gif' class='gold' alt='Gold' title='Gold'> by inviting friends?");
define("Q25_27_ORDER","Order:<\/p>How much <img src='img/x.gif' class='gold' alt='Gold' title='Gold'> do you earn for inviting a friend?");
define("Q25_27_RESP","Correct! You get 50 <img src='img/x.gif' class='gold' alt='Gold' title='Gold'> if your invited friend have 2 village.");

define("Q25_28","任務 24: Construct Embassy.");
define("Q25_28_DESC","The world of Travian is dangerous. You already built a cranny to protect you against attackers.<br \/><br \/>A good alliance will give you even better protection.");
define("Q25_28_ORDER","Order:<\/p>To accept invitations from alliances, build an embassy.");
define("Q25_28_RESP","Yes! You can wait invitation from an alliance or create you own if embassy has level 3");

define("Q25_29","任務 25: Alliance.");
define("Q25_29_DESC","Teamwork is important in Travian. Players who work together organise themselves in alliances. Get an invitation from an alliance in your region and join this alliance. Alternatively, you can found your own alliance. To do this, you need a level 3 embassy.");
define("Q25_29_ORDER","Order:<\/p>Join an alliance or found your own alliance.");
define("Q25_29_RESP","Well done! Now you're in a union called");
define("Q25_29_RESP1",", and you're a member of their alliance.<br>Working together you will all progress faster...");

define("Q25_30","任務");
define("Q25_30_DESC","所有任務都已經完成!");


//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
define("U0","英雄");

//ROMAN UNITS
define("U1","古羅馬步兵");
define("U2","禁衛兵");
define("U3","帝國兵");
define("U4","使節騎士");
define("U5","帝國騎士");
define("U6","將軍騎士");
define("U7","攻城錘");
define("U8","火焰投石機");
define("U9","參議員");
define("U10","拓荒者");

//TEUTON UNITS
define("U11","棍棒兵");
define("U12","矛兵");
define("U13","斧頭兵");
define("U14","探子");
define("U15","遊騎兵");
define("U16","條頓騎士");
define("U17","衝車");
define("U18","簡易投石機");
define("U19","司令官");
define("U20","拓荒者");

//GAUL UNITS
define("U21","方陣兵");
define("U22","劍客");
define("U23","尋路者");
define("U24","雷法師");
define("U25","德魯伊騎兵");
define("U26","海頓騎士");
define("U27","衝車");
define("U28","投石機");
define("U29","族長");
define("U30","拓荒者");
define("U99","陷阱");

//NATURE UNITS
define("U31","老鼠");
define("U32","蜘蛛");
define("U33","蛇");
define("U34","蝙蝠");
define("U35","野豬");
define("U36","狼");
define("U37","熊");
define("U38","鱷魚");
define("U39","老虎");
define("U40","大象");

//NATARS UNITS
define("U41","長槍兵");
define("U42","荊棘戰士");
define("U43","禁衛兵");
define("U44","獵鷹");
define("U45","斧頭騎兵");
define("U46","納塔騎士");
define("U47","戰象");
define("U48","射石機");
define("U49","納塔帝王");
define("U50","納塔拓荒者");

//MONSTER UNITS
define("U51","Monster Peon");
define("U52","Monster Hunter");
define("U53","Monster Warrior");
define("U54","Ghost");
define("U55","Monster Steed");
define("U56","Monster War Steed");
define("U57","Monster Ram");
define("U58","Monster Catapult");
define("U59","Monster Chief");
define("U60","Monster Settler");

// RESOURCES
define("R1","木材");
define("R2","黏土");
define("R3","鐵礦");
define("R4","糧食");

//INDEX.php
define("LOGIN","登錄");
define("PLAYERS","玩家");
define("MODERATOR","管理員");
define("ACTIVE","活躍");
define("ONLINE","在線");
define("TUTORIAL","教學");
define("PLAYER_STATISTICS","玩家數據");
define("TOTAL_PLAYERS","共有 ".PLAYERS." 名玩家");
define("ACTIVE_PLAYERS","活躍玩家");
define("ONLINE_PLAYERS","".PLAYERS." 玩家在線");
define("MP_STRATEGY_GAME","".SERVER_NAME." - 多人在線策略遊戲");
define("WHAT_IS","".SERVER_NAME." 是風靡全世界的網頁遊戲。 作為 ".SERVER_NAME." 的一員，你將建立你自己的帝國、組建強大的軍隊、與你的盟友並肩作戰並最終稱霸世界。");
define("REGISTER_FOR_FREE","在此免費註冊!");
define("LATEST_GAME_WORLD","最新遊戲世界");
define("LATEST_GAME_WORLD2","Register on the latest<br/>game world and enjoy<br/>the advantages of<br/>being one of the<br/>first players.");
define("PLAY_NOW","Play ".SERVER_NAME." now");
define("LEARN_MORE","了解更多 <br/>有關 ".SERVER_NAME."!");
define("LEARN_MORE2","Now with a revolutionised<br>server system, completely new<br>graphics <br>This clone is The Shiz!");
define("COMUNITY","Community");
define("BECOME_COMUNITY","Become part of our community now!");
define("BECOME_COMUNITY2","Become a part of one of<br>the biggest gaming<br>communities in the<br>world.");
define("NEWS","新聞");
define("SCREENSHOTS","遊戲截圖");
define("FAQ","FAQ");
define("SPIELREGELN","規則");
define("AGB","條款聲明");
define("LEARN1","Upgrade your fields and mines to increase your resource production. You will need resources to construct buildings and train soldiers.");
define("LEARN2","Construct and expand the buildings in your village. Buildings improve your overall infrastructure, increase your resource production and allow you to research, train and upgrade your troops.");
define("LEARN3","View and interact with your surroundings. You can make new friends or new enemies, make use of the nearby oases and observe as your empire grows and becomes stronger.");
define("LEARN4","Follow your improvement and success and compare yourself to other players. Look at the Top 10 rankings and fight to win a weekly medal.");
define("LEARN5","Receive detailed reports about your adventures, trades and battles. Don't forget to check the brand new reports about the happenings taking place in your surroundings.");
define("LEARN6","Exchange information and conduct diplomacy with other players. Always remember that communication is the key to winning new friends and solving old conflicts.");
define("LOGIN_TO","登錄至 ". SERVER_NAME);
define("REGIN_TO","註冊於 ". SERVER_NAME);
define("P_ONLINE","在線玩家: ");
define("P_TOTAL","所有玩家: ");
define("CHOOSE","請選擇一個伺服器");
define("STARTED"," 伺服器啟動於 ". round((time()-COMMENCE)/86400) ." 天前。");

//ANMELDEN.php
define("NICKNAME","暱稱");
define("EMAIL","信箱");
define("PASSWORD","密碼");
define("ROMANS","羅馬");
define("TEUTONS","條頓");
define("GAULS","高盧");
define("NW","西北");
define("NE","東北");
define("SW","西南");
define("SE","東南");
define("RANDOM","隨機");
define("ACCEPT_RULES"," 我接受遊戲規則和條約條款。");
define("ONE_PER_SERVER","每位玩家在一個伺服器上至多只能擁有1個帳號。");
define("BEFORE_REGISTER","在註冊帳號前你應閱讀 Travian <a href='../anleitung.php' target='_blank'>遊戲指南</a> 來了解三個種族各自的優勢和劣勢。");
define("BUILDING_UPGRADING","建造中:");
define("HOURS","小時");


//ATTACKS ETC.
define("TROOP_MOVEMENTS","行軍中:");
define("ARRIVING_REINF_TROOPS","到來的增援部隊");
define("ARRIVING_ATTACKING_TROOPS","到來的進攻部隊");
define("ARRIVING_REINF_TROOPS_SHORT","增援");
define("OWN_ATTACKING_TROOPS","己方進攻部隊");
define("ATTACK","進攻");
define("OWN_REINFORCING_TROOPS","己方增援部隊");
define("TROOPS_DORF","部隊:");
define("NEWVILLAGE","新村莊");
define("FOUNDNEWVILLAGE","建立新村莊");
define("UNDERATTACK","村莊遭受攻擊");
define("OASISATTACK","綠洲遭受攻擊");
define("OASISATTACKS","綠洲攻擊");
define("RETURNFROM","返回自");
define("REINFORCEMENTFOR","增援至");
define("ATTACK_ON","進攻至");
define("RAID_ON","掠奪至");
define("SCOUTING","偵查");
define("PRISONERS","俘虜");
define("PRISONERSIN","俘虜在");
define("PRISONERSFROM","俘虜從");
define("TROOPS","部隊");
define("TROOPSFROM","部隊");
define("BOUNTY","賞金");
define("ARRIVAL","抵達");
define("CATAPULT_TARGET","攻城器目標");
define("INCOMING_TROOPS","到來的部隊");
define("TROOPS_ON_THEIR_WAY","途中的部隊");
define("OWN_TROOPS","己方部隊");
define("ON","在");
define("AT","在");
define("UPKEEP","消耗");
define("SEND_BACK","送還");
define("TROOPS_IN_THE_VILLAGE","村莊中的部隊");
define("TROOPS_IN_OTHER_VILLAGE","其他村莊的部隊");
define("TROOPS_IN_OASIS","綠洲中的部隊");
define("KILL","擊殺");
define("FROM","從");
define("SEND_TROOPS","派遣部隊");
define("TASKMASTER","任務官");
define("VILLAGE_OF_THE_ELDERS_TROOPS","舊部隊的村莊");

//SEND TROOP
define("REINFORCE","增援");
define("NORMALATTACK","強攻");
define("RAID","掠奪");
define("OR","或");
define("SENDTROOP","派遣部隊");
define("TROOP","部隊");
define("NOTROOP","無部隊");

//map
define("DETAIL","詳情");
define("ABANDVALLEY","荒地");
define("OCCUPIED","已被占領的");
define("UNOCCUPIED","未被占領的");
define("UNOCCUOASIS","未被占領的綠洲");
define("OCCUOASIS","已被占領的綠洲");
define("THERENOINFO","沒有<br>可用資訊。");
define("LANDDIST","資源田配比");
define("TRIBE","種族");
define("ALLIANCE","聯盟");
define("POP","人口");
define("REPORT","報告");
define("OPTION","選項");
define("CENTREMAP","以此為中心顯示地圖");
define("FNEWVILLAGE","建立新村莊");
define("CULTUREPOINT","文化點數");
define("BUILDRALLY","建造集結點");
define("SETTLERSAVAIL","可用拓荒者");
define("BEGINPRO","新手保護");
define("SENDMERC","派出商人");
define("BAN","玩家已被封禁");
define("BUILDMARKET","建造市場");
define("PERHOUR","每小時");
define("BONUS","激勵");
define("MAP","地圖");
define("CROPFINDER","找田工具");
define("NORTH","北");
define("EAST","東");
define("SOUTH","南");
define("WEST","西");

//other
define("VILLAGE","村莊");
define("OASIS","綠洲");
define("NO_OASIS", "你尚未占領綠洲。");
define("NO_VILLAGES", "那裡沒有村莊。");
define("PLAYER","玩家");

//LOGIN.php
define("COOKIES","你必須啟用Cookies才能登錄。如果你與他人共用此電腦，請在遊玩後登出。");
define("NAME","名稱");
define("PW_FORGOTTEN","忘記密碼?");
define("PW_REQUEST","你可以申請更換新密碼，相關資訊將發送到你的信箱。");
define("PW_GENERATE","生成新密碼。");
define("EMAIL_NOT_VERIFIED","信箱地址尚未驗證!");
define("EMAIL_FOLLOW","通過此連結啟用你的帳戶。");
define("VERIFY_EMAIL","驗證信箱。");
define("SERVER_STARTS_IN","伺服器將啟動於: ");
define("START_NOW","現在啟動");


//404.php
define("NOTHING_HERE","這裡什麼也沒有!");
define("WE_LOOKED","我們找了 404 次，但什麼都沒有發現");

//TIME RELATED
define("CALCULATED","響應延遲");
define("SERVER_TIME","伺服器時間:");

//MASSMESSAGE.php
define("MASS","消息內容");
define("MASS_SUBJECT","主題:");
define("MASS_COLOR","消息顏色:");
define("MASS_REQUIRED","所有空白欄都需要內容");
define("MASS_UNITS","圖像 (units):");
define("MASS_SHOWHIDE","顯示/隱藏");
define("MASS_READ","注意: Read this: after adding smilie, you have to add left or right after number otherwise image will won't work");
define("MASS_CONFIRM","確認");
define("MASS_REALLY","你確定要發送全體 IGM 嗎?");
define("MASS_ABORT","現在中止");
define("MASS_SENT","全體 IGM 已送出");

//BUILDINGS
define("WOODCUTTER","伐木場");
define("CLAYPIT","黏土坑");
define("IRONMINE","鐵礦場");
define("CROPLAND","農田");

define("SAWMILL","鋸木廠");
define("SAWMILL_DESC","木材被送到這裡進一步處理。根據鋸木廠的等級，木材產量可以提升至多 25% 。");
define("CURRENT_WOOD_BONUS","當前木材產量加成:");
define("WOOD_BONUS_LEVEL","木材產量加成於等級");
define("MAX_LEVEL","建築已經到達最高等級");
define("PERCENT","%");

define("BRICKYARD","磚塊廠");
define("CURRENT_CLAY_BONUS","當前黏土產量加成:");
define("CLAY_BONUS_LEVEL","黏土產量加成於等級");
define("BRICKYARD_DESC","黏土被送到這裡進一步處理。根據磚塊廠的等級，黏土產量可以提升至多 25% 。");

define("IRONFOUNDRY","鑄鐵廠");
define("CURRENT_IRON_BONUS","當前鐵礦產量加成:");
define("IRON_BONUS_LEVEL","鐵礦產量加成於等級");
define("IRONFOUNDRY_DESC","鐵礦被送到這裡進一步處理。根據鑄鐵廠的等級，鐵礦產量可以提升至多 25% 。");

define("GRAINMILL","磨坊");
define("CURRENT_CROP_BONUS","當前糧食產量加成:");
define("CROP_BONUS_LEVEL","糧食產量加成於等級");
define("GRAINMILL_DESC","糧食被送到這裡進一步加工成麵粉。根據磨坊的等級，糧食產量可以提升至多 25% 。");

define("BAKERY","麵包房");
define("BAKERY_DESC","麵粉可以進一步烘烤成麵包。在磨坊的基礎之上，將糧食產量提升至多 50% 。");

define("WAREHOUSE","倉庫");
define("CURRENT_CAPACITY","當前容量:");
define("CAPACITY_LEVEL","容量在等級");
define("RESOURCE_UNITS","資源單位");
define("WAREHOUSE_DESC","木材、黏土和鐵礦儲存在倉庫中。倉庫的等級越高，儲存容量越高。");

define("GRANARY","糧倉");
define("CROP_UNITS","糧食單位");
define("GRANARY_DESC","糧食儲存在糧倉中。糧倉的等級越高，儲存容量越高。");

define("BLACKSMITH","鐵匠鋪");
define("ACTION","選項");
define("UPGRADE","升級");
define("UPGRADE_IN_PROGRESS","升級在<br>進行中");
define("UPGRADE_BLACKSMITH","升級<br>鐵匠鋪");
define("UPGRADES_COMMENCE_BLACKSMITH","鐵匠鋪建造完成後才能開始升級。");
define("MAXIMUM_LEVEL","最高<br>等級");
define("EXPAND_WAREHOUSE","擴建<br>倉庫");
define("EXPAND_GRANARY","擴建<br>糧倉");
define("ENOUGH_RESOURCES","足夠的資源");
define("CROP_NEGATIVE ","你的糧食產量為負，因此不可能抵達需求的糧食數目");
define("TOO_FEW_RESOURCES","缺少<br>資源");
define("UPGRADING","升級中");
define("DURATION","時長");
define("COMPLETE","完成");
define("BLACKSMITH_DESC","在鐵匠鋪的熔爐中，士兵們的武器得到強化。鐵匠鋪等級越高，士兵的攻擊力將能得到更高的強化。");

define("ARMOURY","盔甲廠");
define("UPGRADE_ARMOURY","升級<br>盔甲廠");
define("UPGRADES_COMMENCE_ARMOURY","盔甲廠建造完成後才能開始升級。");
define("ARMOURY_DESC","盔甲廠的工匠能生產更好的防具。盔甲廠等級越高，士兵的防禦力將能得到更高的強化。");

define("TOURNAMENTSQUARE","競技場");
define("CURRENT_SPEED","當前行軍速度加成:");
define("SPEED_LEVEL","行軍速度加成在等級");
define("TOURNAMENTSQUARE_DESC","在競技場，你的部隊日復一日地訓練，他們的耐力得到了提升。競技場等級越高，士兵進行 ".TS_THRESHOLD." 格以上的行軍將更快。");

define("MAINBUILDING","村莊大樓");
define("CURRENT_CONSTRUCTION_TIME","當前建造速度:");
define("CONSTRUCTION_TIME_LEVEL","建造速度在等級");
define("DEMOLITION_BUILDING","拆除建築:</h2><p>如果你不再需要某個建築，你可以在這裡下令拆除。</p>");
define("DEMOLISH","拆除");
define("DEMOLITION_OF","拆除");
define("MAINBUILDING_DESC","村莊大樓是建築大師的住所。村莊大樓等級越高，建築的建造速度就越快。");

define("RALLYPOINT","集結點");
define("RALLYPOINT_COMMENCE","當 ".RALLYPOINT." 建造完畢時，將顯示部隊動向");
define("OVERVIEW","概覽");
define("REINFORCEMENT","增援");
define("EVASION_SETTINGS","侵略設定");
define("SEND_TROOPS_AWAY_MAX","Send troops away a maximum of");
define("TIMES","times");
define("PER_EVASION","per evasion");
define("RALLYPOINT_DESC","村莊的部隊在這裡集合。你可以在這裡派遣部隊去征服、掠奪、偵查或增援其他地方。");

define("MARKETPLACE","市場");
define("MERCHANT","商人");
define("OR_","或");
define("GO","出發");
define("UNITS_OF_RESOURCE","單位資源");
define("MERCHANT_CARRY","每個商人可以攜帶");
define("MERCHANT_COMING","到來的商人");
define("TRANSPORT_FROM","運送來自");
define("ARRIVAL_IN","抵達剩餘時間");
define("NO_COORDINATES_SELECTED","未輸入坐標");
define("CANNOT_SEND_RESOURCES","你不能向本村運送資源");
define("BANNED_CANNOT_SEND_RESOURCES","玩家已被封禁，你不能向其運送資源。");
define("RESOURCES_NO_SELECTED","未輸入資源");
define("ENTER_COORDINATES","輸入坐標或村莊名稱");
define("TOO_FEW_MERCHANTS","商人不足");
define("OWN_MERCHANTS_ONWAY","己方商人在途中");
define("MERCHANTS_RETURNING","商人返回中");
define("TRANSPORT_TO","運輸至");
define("I_AN_SEARCHING","我尋求");
define("I_AN_OFFERING","我提供");
define("OFFERS_MARKETPLACE","市場中的報價");
define("NO_AVAILABLE_OFFERS","市場中沒有報價");
define("OFFERED_TO_ME","提供<br>給我");
define("WANTED_TO_ME","我<br>提供");
define("NOT_ENOUGH_MERCHANTS","商人不足");
define("ACCEP_OFFER","接受報價");
define("NO_AVALIBLE_OFFERS","市場上沒有可用的報價");
define("SEARCHING","搜索中");
define("OFFERING","發出報價");
define("MAX_TIME_TRANSPORT","運輸次數達上限");
define("OWN_ALLIANCE_ONLY","僅限聯盟");
define("INVALID_OFFER","報價不再可用");
define("INVALID_MERCHANTS_REPETITION","不可用的商人重複次數");
define("USER_ON_VACATION","用戶正在度假");
define("NOT_ENOUGH_RESOURCES","資源不足");
define("OFFER","報價");
define("SEARCH","搜索");
define("OWN_OFFERS","我的報價");
define("ALL","所有");
define("NPC_TRADE","資源置換");
define("SUM","總計");
define("REST","餘下");
define("TRADE_RESOURCES","交易資源 (第二步");
define("DISTRIBUTE_RESOURCES","分配資源 (第一步)");
define("OF","of");
define("NPC_COMPLETED","資源置換完成");
define("BACK_BUILDING","返回建築");
define("YOU_CAN_NAT_NPC_WW","在世界奇觀村莊中不能進行資源置換。");
define("NPC_TRADING","資源置換");
define("SEND_RESOURCES","運送資源");
define("BUY","購買");
define("TRADE_ROUTES","貿易路線");
define("DESCRIPTION","描述");
define("TIME_LEFT","剩餘時間");
define("START","開始");
define("NO_TRADE_ROUTES","沒有活躍的貿易路線");
define("TRADE_ROUTE_TO","貿易路線至");
define("CHECKED","checked");
define("DAYS","Days");
define("EXTEND","Extend");
define("EDIT","Edit");
define("EXTEND_TRADE_ROUTES","Extend the trade route by <b>7</b> days for");
define("CREATE_TRADE_ROUTES","Create new trade route");
define("DELIVERIES","Deliveries");
define("START_TIME_TRADE","Start time");
define("CREATE_TRADE_ROUTE","Create trade route");
define("TARGET_VILLAGE","Target village");
define("EDIT_TRADE_ROUTES","Edit trade route");
define("TRADE_ROUTES_DESC","Trade route allows you to set up routes for your merchant that he will walk every day at a certain hour. <br /><br /> Standard this holds on for <b>7</b> days, but you can extend it with <b>7</b> days for the cost of");
define("NPC_TRADE_DESC","With the NPC merchant you can distribute the resources in your warehouse as you desire. <br /><br /> The first line shows the current stock. In the second line you can choose another distribution. The third line shows the difference between the old and new stock.");
define("MARKETPLACE_DESC","At the Marketplace you can trade resources with other players. The higher its level, the more resources can be transported at the same time.");

define("EMBASSY","大使館");
define("TAG","標籤");
define("TO_THE_ALLIANCE","前往聯盟");
define("JOIN_ALLIANCE","加入聯盟");
define("REFUSE","拒絕");
define("ACCEPT","接受");
define("NO_INVITATIONS","沒有有效的邀請。");
define("NO_CREATE_ALLIANCE","被封禁的玩家不能創建聯盟。");
define("FOUND_ALLIANCE","創建聯盟");
define("EMBASSY_DESC","大使館是進行外交活動的場所。 The higher its level the more options the king gains.");

define("BARRACKS","兵營");
define("QUANTITY","數量");
define("MAX","最大");
define("TRAINING","訓練中");
define("FINISHED","完成");
define("UNIT_FINISHED","距離下一個單位訓練完成");
define("AVAILABLE","可用");
define("TRAINING_COMMENCE_BARRACKS","兵營建造完成後才能開始訓練。");
define("BARRACKS_DESC","所有的步兵都在兵營中訓練產生。兵營的等級越高，訓練步兵的速度越快。");

define("STABLE","馬廄");
define("AVAILABLE_ACADEMY","沒有可訓練單位。請先在學院研究。");
define("TRAINING_COMMENCE_STABLE","馬廄建造完成後才能開始訓練。");
define("STABLE_DESC","騎兵在馬廄中訓練。馬廄的等級越高，訓練騎兵的速度越快。");

define("WORKSHOP","攻城武器廠");
define("TRAINING_COMMENCE_WORKSHOP","攻城武器廠建造完成後才能開始生產攻城武器。");
define("WORKSHOP_DESC","諸如攻城錘、投石車等的攻城武器在攻城武器廠中生產。攻城武器廠等級越高，攻城武器的生產速度越快。");

define("ACADEMY","學院");
define("RESEARCH_AVAILABLE","當前沒有可研究的項目。");
define("RESEARCH_COMMENCE_ACADEMY","當學院建造完成後才能開始研究。");
define("RESEARCH","研究");
define("EXPAND_WAREHOUSE1","擴建倉庫");
define("EXPAND_GRANARY1","擴建糧倉");
define("RESEARCH_IN_PROGRESS","研究<br>進行中");
define("RESEARCHING","研究中");
define("PREREQUISITES","先決條件");
define("SHOW_MORE","顯示更多");
define("HIDE_MORE","隱藏更多");
define("ACADEMY_DESC","學院裡可以研究新的兵種。更好的兵種通常需要更高等級的學院來解鎖。");

define("CRANNY","山洞");
define("CURRENT_HIDDEN_UNITS","目前可以保護的各類資源:");
define("HIDDEN_UNITS_LEVEL","保護的資源數量在等級");
define("UNITS","單位");
define("CRANNY_DESC","在村莊被攻擊時，山洞隱藏的資源可以不被掠奪。");

define("TOWNHALL","市政廳");
define("CELEBRATIONS_COMMENCE_TOWNHALL","市政廳建造完成後才可以開始舉辦慶典。");
define("GREAT_CELEBRATIONS","大型慶典");
define("CULTURE_POINTS","文化點數");
define("HOLD","舉辦");
define("CELEBRATIONS_IN_PROGRESS","慶典<br />正在進行中");
define("CELEBRATIONS","慶典");
define("TOWNHALL_DESC","你可以在市政廳舉辦盛大的慶典，獲得大量文明點數。市政廳等級越高，舉辦慶典的時間越短。");

define("RESIDENCE","行宮");
define("CAPITAL","這裡是你的首都");
define("RESIDENCE_TRAIN_DESC","你需要10級或20級行宮和三個拓荒者來開闢新村莊。你需要10級或20級行宮和一個參議員、司令官或族長來征服其他村莊。");
define("PRODUCTION_POINTS","本村的生成速度:");
define("PRODUCTION_ALL_POINTS","所有村莊的生成速度:");
define("POINTS_DAY","文化點數每天");
define("VILLAGES_PRODUCED","你的村莊共計已經生成了");
define("POINTS_NEED","文化點數。為了開闢或征服新村莊，你需要");
define("POINTS","文化點數");
define("INHABITANTS","村民");
define("COORDINATES","坐標");
define("EXPANSION","擴張");
define("TRAIN","訓練");
define("DATE","日期");
define("CONQUERED_BY_VILLAGE","由本村開闢或征服的村莊");
define("NONE_CONQUERED_BY_VILLAGE","本村還沒有建立或開闢村莊。");
define("RESIDENCE_CULTURE_DESC","你需要文化點數來擴張你的帝國。文化點數隨時間生成，你的建築物越多、等級越高，生成文化點數的速度就越快。");
define("RESIDENCE_LOYALTY_DESC","在強攻時，部隊中若有參議員、司令官或族長，被攻擊的村莊忠誠度就會降低。如果忠誠度降為 0 ，村莊就會加入攻擊者的國家。本村當前忠誠度為 ");
define("RESIDENCE_DESC","行宮是一座小型宮殿，供國王或王后在訪問村莊時居住。行宮可以防止敵人征服村莊。");

define("PALACE","皇宮");
define("PALACE_CONSTRUCTION","皇宮已在建造中");
define("PALACE_TRAIN_DESC","你需要10級、15級或20級皇宮和三個拓荒者來開闢新村莊。你需要10級、15級或20級皇宮和一個參議員、司令官或族長來征服其他村莊。");
define("CHANGE_CAPITAL","遷都");
define("SECURITY_CHANGE_CAPITAL","你確定要遷都嗎?<br /><b>該操作不可撤銷!</b><br />為了安全起見，你必須輸入密碼來確認:<br />");
define("PALACE_DESC","帝國的國王或皇后居住在這座宮殿中。你的王國只能有一座皇宮。你需要皇宮來指定首都的所在。");

define("TREASURY","寶物庫");
define("TREASURY_COMMENCE","寶物庫建造完成後可以查看寶物。");
define("ARTIFACTS_AREA","你附近的寶物");
define("NO_ARTIFACTS_AREA","你附近沒有寶物。");
define("OWN_ARTIFACTS","你的寶物");
define("CONQUERED","已征服");
define("DISTANCE","距離");
define("EFFECT","效果");
define("ACCOUNT","帳號");
define("SMALL_ARTIFACTS","小型寶物");
define("LARGE_ARTIFACTS","大型寶物");
define("NO_ARTIFACTS","沒有寶物。");
define("ANY_ARTIFACTS","你沒有任何寶物。");
define("OWNER","所有者");
define("AREA_EFFECT","作用範圍");
define("VILLAGE_EFFECT","村莊效果");
define("ACCOUNT_EFFECT","帳號效果");
define("UNIQUE_EFFECT","獨特效果");
define("REQUIRED_LEVEL","等級要求");
define("TIME_CONQUER","征服時間");
define("TIME_ACTIVATION","啟用時間");
define("NEXT_EFFECT"," 下一個效果");
define("FORMER_OWNER","曾經的所有者");
define("BUILDING_STRONGER","Building stronger with");
define("BUILDING_WEAKER","Building weaker with");
define("TROOPS_FASTER","Makes troops faster with");
define("TROOPS_SLOWEST","Makes troops slowest with");
define("SPIES_INCREASE","Spies increase ability with");
define("SPIES_DECRESE","Spies decrese ability with");
define("CONSUME_LESS","All troops consume less with");
define("CONSUME_HIGH","All troops consume high with");
define("TROOPS_MAKE_FASTER","Troops make faster with");
define("TROOPS_MAKE_SLOWEST","Troops make slowest with");
define("YOU_CONSTRUCT","You can construct ");
define("CRANNY_INCREASED","Cranny capacity is increased by");
define("CRANNY_DECRESE","Cranny capacity is decrese by");
define("WW_BUILDING_PLAN","You can build the Wonder of the World");
define("NO_WW","There are no Wonders of the World");
define("NO_PREVIOUS_OWNERS","There are no previous owners.");
define("TREASURY_DESC","帝國最珍貴的財富保存在寶物庫中。寶物庫只能存下一件寶物。獲得寶物後需要存放一段時間才開始生效。After you have captured an artefact it takes 24 hours on a normal server or 12 hours on a thrice speed server to be effective.");

define("TRADEOFFICE","交易所");
define("CURRENT_MERCHANT","當前商人運載量:");
define("MERCHANT_LEVEL","商人運載量在等級");
define("TRADEOFFICE_DESC","商人在交易所可以獲得更大的馬車和更好的馬。交易所等級越高，你的商人可以運送的資源越多。");

define("GREATBARRACKS","大兵營");
define("TRAINING_COMMENCE_GREATBARRACKS","大兵營建造完成後才能開始訓練。");
define("GREATBARRACKS_DESC","Foot soldiers are trained in the great barracks. The higher the level of the barracks, the faster the troops are trained.");

define("GREATSTABLE","大馬廄");
define("TRAINING_COMMENCE_GREATSTABLE","大馬廄建造完成後才能開始訓練。");
define("GREATSTABLE_DESC","Cavalry can be trained in the great stable. The higher its level the faster the troops are trained.");

define("CITYWALL","城牆");
define("DEFENCE_NOW","當前防禦加成:");
define("DEFENCE_LEVEL","防禦加成在等級");
define("CITYWALL_DESC","建造城牆可以保護你的村莊，你的士兵可以依託城牆更好地抵禦外敵。城牆等級越高，防禦加成越高。");

define("EARTHWALL","土牆");
define("EARTHWALL_DESC","建造土牆可以保護你的村莊，因為你的士兵可以依託土牆更好地抵禦外敵。土牆等級越高，防禦加成越高。");

define("PALISADE","木柵欄");
define("PALISADE_DESC","建造木柵欄可以保護你的村莊，因為你的士兵可以依託木柵欄更好地抵禦外敵。木柵欄等級越高，防禦加成越高。");

define("STONEMASON","石匠小屋");
define("CURRENT_STABILITY","當前耐久度加成:");
define("STABILITY_LEVEL","耐久度加成在等級");
define("STONEMASON_DESC","石匠是強化建築的大師。石匠小屋等級越高，村莊建築的耐久度越高。");

define("BREWERY","釀酒廠");
define("CURRENT_BONUS","當前加成:");
define("BONUS_LEVEL","加成在等級");
define("BREWERY_DESC","美味的蜂蜜酒……咕嘟咕嘟咕嘟……");

define("TRAPPER","陷阱機");
define("CURRENT_TRAPS","當前最大陷阱容量:");
define("TRAPS_LEVEL","最大陷阱容量在");
define("TRAPS","陷阱");
define("TRAP","陷阱");
define("CURRENT_HAVE","你目前擁有");
define("WHICH_OCCUPIED","被俘獲");
define("TRAINING_COMMENCE_TRAPPER","陷阱機建造完成後才能製作陷阱。");
define("TRAPPER_DESC","陷阱機透過隱藏的陷阱來保護你的村莊。被陷阱捕獲的敵人將無力攻擊你的村莊。");

define("HEROSMANSION","英雄園");
define("HERO_READY","距離英雄就緒 ");
define("NAME_CHANGED","英雄名稱已更改");
define("NOT_UNITS","不可用的單位");
define("NOT","不 ");
define("TRAIN_HERO","訓練新的英雄");
define("REVIVE","重生");
define("OASES","綠洲");
define("DELETE","刪除");
define("RESOURCES","資源");
define("OFFENCE","個體攻擊力");
define("DEFENCE","個體防禦力");
define("OFF_BONUS","全軍攻擊加成");
define("DEF_BONUS","全軍防禦加成");
define("REGENERATION","恢復速度");
define("DAY","天");
define("EXPERIENCE","經驗值");
define("YOU_CAN","你可以 ");
define("RESET","重設");
define("YOUR_POINT_UNTIL"," 你的點數，直到等級達到 ");
define("OR_LOWER"," !");
define("YOUR_HERO_HAS","你的英雄擁有 ");
define("OF_HIT_POINTS","點生命值");
define("ERROR_NAME_SHORT","錯誤: 名稱太短");
define("HEROSMANSION_DESC"," 在英雄園，你可以訓練你的英雄。英雄園等級到達10、15和20時分別可以多攻占一片村莊附近的綠洲。");

define("GREATWAREHOUSE","大倉庫");
define("GREATWAREHOUSE_DESC","Wood, clay and iron are stored in the warehouse. The great warehouse offers you more space and keeps your goods drier and safer than the normal one.");

define("GREATGRANARY","大糧倉");
define("GREATGRANARY_DESC","Crop produced by your farms is stored in the granary. The great granary offers you more space and keeps your crops drier and safer than the normal one.");

define("WONDER","世界奇觀");
define("WORLD_WONDER","世界奇觀");
define("WONDER_DESC","世界奇觀是帝國強大和繁榮的豐碑，是贏得遊戲的目標。世界奇觀每提升一級都需要耗費不計其數的資源。");
define("WORLD_WONDER_CHANGE_NAME","你需要建造一級世界奇觀才能更改它的名稱");
define("WORLD_WONDER_NAME","世界奇觀名稱");
define("WORLD_WONDER_NOTCHANGE_NAME","世界奇觀10級之後不能再更改名稱");
define("WORLD_WONDER_NAME_CHANGED","名稱已更改");

define("HORSEDRINKING","飲馬槽");
define("HORSEDRINKING_DESC","飲馬槽是羅馬人加快騎兵訓練速度、降低騎兵糧耗的獨特技術。");

define("GREATWORKSHOP","大攻城武器廠");
define("TRAINING_COMMENCE_GREATWORKSHOP","Training can commence when great workshop is completed.");
define("GREATWORKSHOP_DESC","Siege engines like catapults and rams can be built in the great workshop. The higher its level the faster the units are produced.");

define("BUILDING_MAX_LEVEL_UNDER","建築正在升級至最高等級");
define("BUILDING_BEING_DEMOLISHED","建築正在被拆除");
define("COSTS_UPGRADING_LEVEL","消耗下列資源</b> 以升至等級");
define("WORKERS_ALREADY_WORK","工人已經在工作中。");
define("CONSTRUCTING_MASTER_BUILDER","令建築大師等待建造 ");
define("COSTS","消耗");
define("GOLD","金幣");
define("WORKERS_ALREADY_WORK_WAITING","工人已經在工作中。 (加入建造隊列)");
define("ENOUGH_FOOD_EXPAND_CROPLAND","糧食產量不足，請先擴建農田。");
define("UPGRADE_WAREHOUSE","升級倉庫");
define("UPGRADE_GRANARY","升級糧倉");
define("YOUR_CROP_NEGATIVE","你的糧食產量為負，你不可能達到所需的資源。");
define("UPGRADE_LEVEL","升至等級 ");
define("WAITING","(等待隊列)");
define("NEED_WWCONSTRUCTION_PLAN","需要世界奇觀藍圖");
define("NEED_MORE_WWCONSTRUCTION_PLAN","需要更多世界奇觀藍圖");
define("CONSTRUCT_NEW_BUILDING","建造新建築");
define("SHOWSOON_AVAILABLE_BUILDINGS","顯示即將可用的建築");
define("HIDESOON_AVAILABLE_BUILDINGS","隱藏即將可用的建築");

//artefact
define("ARCHITECTS_DESC","All buildings in the area of effect are stronger. This means that you will need more catapults to damage buildings protected by this artifacts powers.");
define("ARCHITECTS_SMALL","The architects slight secret");
define("ARCHITECTS_SMALLVILLAGE","Diamond Chisel");
define("ARCHITECTS_LARGE","The architects great secret");
define("ARCHITECTS_LARGEVILLAGE","Giant Marble Hammer");
define("ARCHITECTS_UNIQUE","The architects unique secret");
define("ARCHITECTS_UNIQUEVILLAGE","Hemons Scrolls");
define("HASTE_DESC","All troops in the area of effect move faster.");
define("HASTE_SMALL","The slight titan boots");
define("HASTE_SMALLVILLAGE","Opal Horseshoe");
define("HASTE_LARGE","The great titan boots");
define("HASTE_LARGEVILLAGE","Golden Chariot");
define("HASTE_UNIQUE","The unique titan boots");
define("HASTE_UNIQUEVILLAGE","Pheidippides Sandals");
define("EYESIGHT_DESC","All spies (Scouts, Pathfinders, and Equites Legati) increase their spying ability. In addition, with all versions of this artifact you can see the incoming TYPE of troops but not how many there are.");
define("EYESIGHT_SMALL","The eagles slight eyes");
define("EYESIGHT_SMALLVILLAGE","Tale of a Rat");
define("EYESIGHT_LARGE","The eagles great eyes");
define("EYESIGHT_LARGEVILLAGE","Generals Letter");
define("EYESIGHT_UNIQUE","The eagles unique eyes");
define("EYESIGHT_UNIQUEVILLAGE","Diary of Sun Tzu");
define("DIET_DESC","All troops in the artifacts range consume less wheat, making it possible to maintain a larger army.");
define("DIET_SMALL","Slight diet control");
define("DIET_SMALLVILLAGE","Silver Platter");
define("DIET_LARGE","Great diet control");
define("DIET_LARGEVILLAGE","Sacred Hunting Bow");
define("DIET_UNIQUE","Unique diet control");
define("DIET_UNIQUEVILLAGE","King Arthurs Chalice");
define("ACADEMIC_DESC","Troops are built a certain percentage faster within the scope of the artifact.");
define("ACADEMIC_SMALL","The trainers slight talent");
define("ACADEMIC_SMALLVILLAGE","Scribed Soldiers Oath");
define("ACADEMIC_LARGE","The trainers great talent");
define("ACADEMIC_LARGEVILLAGE","Declaration of War");
define("ACADEMIC_UNIQUE","The trainers unique talent");
define("ACADEMIC_UNIQUEVILLAGE","Memoirs of Alexander the Great");
define("STORAGE_DESC","With this building plan you are able to build the Great Granary or Great Warehouse in the Village with the artifact, or the whole account depending on the artifact. As long as you posses that artifact you are able to build and enlarge those buildings.");
define("STORAGE_SMALL","Slight storage masterplan");
define("STORAGE_SMALLVILLAGE","Builders Sketch");
define("STORAGE_LARGE","Great storage masterplan");
define("STORAGE_LARGEVILLAGE","Babylonian Tablet");
define("CONFUSION_DESC","Cranny capacity is increased by a certain amount for each type of artifact. Catapults can only shoot random on villages within this artifacts power. Exceptions are the WW which can always be targeted and the treasure chamber which can always be targeted, except with the unique artifact. When aiming at a resource field only random resource fields can be hit, when aiming at a building only random buildings can be hit.");
define("CONFUSION_SMALL","Rivals slight confusion");
define("CONFUSION_SMALLVILLAGE","Map of the Hidden Caverns");
define("CONFUSION_LARGE","Rivals great confusion");
define("CONFUSION_LARGEVILLAGE","Bottomless Satchel");
define("CONFUSION_UNIQUE","Rivals unique confusion");
define("CONFUSION_UNIQUEVILLAGE","Trojan Horse");
define("FOOL_DESC","Every 24 hours it gets a random effect, bonus, or penalty (all are possible with the exception of great warehouse, great granary and WW building plans). They change effect AND scope every 24 hours. The unique artifact will always take positive bonuses.");
define("FOOL_SMALL","Artefact of the slight fool");
define("FOOL_SMALLVILLAGE","Pendant of Mischief");
define("FOOL_UNIQUE","Artefact of the unique fool");
define("FOOL_UNIQUEVILLAGE","Forbidden Manuscript");
define("WWVILLAGE","WW village");
define("ARTEFACT","<h1><b>Natars Artifacts</b></h1>

Whispering rumors echo through the villages, sharing legends told only by the best storytellers. It refers to NATARS, the most feared warrior of the TRAVIAN world. Their killing is the dream of any hero, the purpose of any fighter. No one knows how NATARS got to get such power, and their warriors so cruel. Determined to discover the source of the NATARS power, the fighters send a group of elite spies to spy them. I do not go through many hours and come back with fear in their eyes and balancing fantastic theories: it seems that the natural power comes from the mysterious objects they call artifacts that they stole from our ancestors. Try to steal the artefacts of her, and you can control their power.

<img src=\"img/x.gif\" class=\"ArtifactsAnnouncement\">

The time has come for claiming artifacts. Collaborate with your alliance and bring your worriors to get these wanted objects. However, NATARS will not give up without war to the artefacts ... nor your enemies. If you are successful in retrieving artifacts and you will be able to reject enemies, you will be able to collect the rewards. Your buildings will become incredibly strong and mightest, and the troops will be much faster and will consume less food. Capture the artifacts, bring glory over your empire and become new legends for your followers.

To steal one, the following things must happen:

1. You must attack the village (NO Raid!)
2. WIN the Attack
3. Destroy the treasury
4. An empty treasury level 10 for SMALL ARTIFACTS and level 20 for LARGE ARTIFACT must be in the village where that attack came from
5. Have a hero in an attack

If not, the next attack on that village, winning with a hero and empty treasury will take the artifact.

To build a WW, you must own a plan yourself (you = the WW village owner) from lvl 0 to 50, from 51 to 100 you need an additional plan in your alliance! Two plans in the WW village account would not work!

The construction plans are conquerable immediately when they appear to the server.

There will be a countdown in game, showing the exact time of the release, 5 days prior to the launch. ");

//WW Village Release Message
define("WWVILLAGEMSG","<h1><b>Wonder of the World Villages</b></h1>

Countless days have passed since the first battles upon the walls of the cursed villages of the Dread Natars, many armies of both the free ones and the Natarian empire struggled and died before the walls of the many strongholds from which the Natars had once ruled all creation. Now with the dust settled and a relative calm having settled in, armies began to count their losses and collect their dead, the stench of combat still lingering in the night air, a smell of a slaughter unforgettable in its extent and brutality yet soon to be dwarfed by yet others. The largest armies of the free ones and the Dread Natars were marshalling for yet another renewed assault upon the coveted former strongholds of the Natarian Empire.
Soon scouts arrived telling of a most awesome sight and a chilling reminder, a dread army of an unfathomable size had been spotted marshalling at the end of the world, the Natarian capital, a force so great and unstoppable that the dust from their march would choke off all light, a force so brutal and ruthless that it would crush all hope. The free people knew that they had to race now, race against time and the endless hordes of the Natarian Empire to raise a Wonder of the World to restore the world to peace and vanquish the Natarian threat.
But to raise such a great Wonder would be no easy task, one would need construction plans created in the distant past, plans of such an arcane nature that even the very wisest of sages knew not their contents or locations.
Tens of thousands of scouts roamed across all existence searching in vain for these mystical plans, looking in all places but the dreaded Natarian Capital, yet could not find them. Today however, they return bearing good news, they return baring the locations of the plans, hidden by the armies of the Natars inside secret strongholds constructed to be hidden from the eyes of man.
Now begins the final stretch, when the greatest armies of the Free people and the Natars will clash across the world for the fate of all that lies under heaven. This is the war that will echo across the eons, this is your war, and here you shall etch your name across history, here you shall become legend.

<img src=\"img/x.gif\" class=\"WWVillagesAnnouncement\" title=\"".WWVILLAGE."\" alt=\"".WWVILLAGE."\">

To conquer one, the following things must happen:

1. You must attack the village (NO Raid!)
2. WIN the Attack
3. Destroy the RESIDENCE
4. You must decrease the loyalty to 0 with : SENATORS , CHIEF , CHIEFTAIN
5. You must have enough culture points to conquer the village

If not, the next attack on that village, winning with a SENATORS , CHIEF , CHIEFTAIN and empty slots in RESIDENCE/PALACE will take the village.

To build a WW, you must own a plan yourself (you = the WW village owner) from lvl 0 to 50, from 51 to 100 you need an additional plan in your alliance! Two plans in the WW village account would not work!

The construction plans are conquerable immediately when they appear to the server.

There will be a countdown in game, showing the exact time of the release, ".(5 / SPEED)." days prior to the launch. ");

//Building Plans
define("PLAN","Ancient Construction Plan");
define("PLANVILLAGE","WW Buildingplan");
define("PLAN_DESC","With this ancient construction plan you will able to build World Wonder to level 50. to build further, your alliance must hold at least two plans.");
define("PLAN_INFO","<h1><b>World Wonder Construction Plans</b></h1>


Many moons ago the tribes of Travian were surprised by the unforeseen return of the Natars. This tribe from immemorial times surpassing all in wisdom, might and glory was about to trouble the free ones again. Thus they put all their efforts in preparing a last war against the Natars and vanquishing them forever. Many thought about the so-called 'Wonders of the World', a construction of many legends, as the only solution. It was told that it would render anyone invincible once completed. Ultimately making the constructors the rulers and conquerors of all known Travian.

However, it was also told that one would need construction plans to construct such a building. Due to this fact, the architects devised cunning plans about how to store these safely. After a while, one could see temple-like buildings in many a city and metropolis - the Treasure Chambers (Treasuries).

Sadly, no one - not even the wise and well versed - knew where to find these construction plans. The harder people tried to locate them, the more it seemed as if they where only legends.

Today, however, this last secret will be revealed. Deprivations and endeavors of the past will not have been in vain, as today scouts of several tribes have successfully obtained the whereabouts of the construction plans. Well guarded by the Natars, they lie hidden in several oases to be found all over Travian. Only the most valiant heroes will be able to secure such a plan and bring it home safely so that the construction can begin.

In the end, we will see whether the free tribes of Travian can once again outwit the Natars and vanquish them once and for all. Do not be so foolish as to assume that the Natars will leave without a fight, though!

<img src=\"img/x.gif\" class=\"WWBuildingPlansAnnouncement\" title=\"".PLAN."\" alt=\"".PLAN."\">

To steal a set of Construction Plans from the Natars, the following things must happen:
- You must Attack the village (NOT Raid!)
- You must WIN the Attack
- You must DESTROY the Treasure Chamber (Treasury)
- Your Hero MUST be in that attack, as he is the only one who may carry the Construction Plans
- An empty level 10 Treasure Chamber (Treasury) MUST be in the village where that attack came from
NOTE: If the above criteria is not met during the attack, the next attack on that village which does meet the above criteria will take the Construction Plans.



To build a Treasure Chamber (Treasury), you will need a Main Building level 10 and the village MUST NOT be  contain a World Wonder.

To build a World Wonder, you must own the Construction Plans yourself (you = the World Wonder Village Owner) from level 0 to 50, and then from level 51 to 100 you will need an additional set of Construction Plans in your Alliance! Two sets of Construction Plans in the World Wonder Village Account will not work!");

//Admin setting - Admin/Templates/config.tpl & editServerSet.tpl
define("EDIT_BACK","返回");
define("SERV_CONFIG","伺服器配置");
define("SERV_SETT","伺服器設置");
define("EDIT_SERV_SETT","編輯伺服器設置");
define("SERV_VARIABLE","變數");
define("SERV_VALUE","值");
define("CONF_SERV_NAME","Server Name");
define("CONF_SERV_NAME_TOOLTIP","Name of the game server.");
define("CONF_SERV_STARTED","Server Started");
define("CONF_SERV_STARTED_TOOLTIP","Time when the game server was started. This parameter can not be changed on the installed game server.");
define("CONF_SERV_TIMEZONE","Server Timezone");
define("CONF_SERV_TIMEZONE_TOOLTIP","Timezone of the game server.");
define("CONF_SERV_LANG","Language");
define("CONF_SERV_LANG_TOOLTIP","The language that is used in the admin panel and for everyone on the game server by default.");
define("CONF_SERV_SERVSPEED","Server Speed");
define("CONF_SERV_SERVSPEED_TOOLTIP","The speed of the game server. The higher the speed of the game server, the faster all buildings are built, the studies and improvements in the smithies are carried out, the troops are quickly built and the productivity of all resources is increased.");
define("CONF_SERV_TROOPSPEED","Troop Speed");
define("CONF_SERV_TROOPSPEED_TOOLTIP","Speed of movement of troops on the game server. The higher this indicator, the faster the troops move across the map.");
define("CONF_SERV_EVASIONSPEED","Evasion Speed");
define("CONF_SERV_EVASIONSPEED_TOOLTIP","The evasion speed is the time that troops spend on the road to return home after evasion an attack.");
define("CONF_SERV_STORMULTIPLER","Storage Multipler");
define("CONF_SERV_STORMULTIPLER_TOOLTIP","A multiplier for the storage capacity warehouse and granary. The value 1 is equal to the capacity of 80,000 of each resource at the maximum level. If you set the value to 2, then the capacity at the maximum level will be 160,000 of each resource.<br><b>Note:</b> the amount of resources that will be generated by unoccupied oases for robbery depends on this value. The default is 800. If you set the value to 2, the maximum number for each resource being generated is 1600.");
define("CONF_SERV_TRADCAPACITY","Trader Capacity");
define("CONF_SERV_TRADCAPACITY_TOOLTIP","A multiplier for the capacity of resources that can be carried by one trader. The value of 1 equals 500 capacity for the Romans, 750 for the Gauls, 1000 for the Teutons. If you set the value to 2, then the capacity of the transferred resources will double accordingly, 1000, 1500, 2000.");
define("CONF_SERV_CRANCAPACITY","Cranny Capacity");
define("CONF_SERV_CRANCAPACITY_TOOLTIP","A multiplier for the capacity of resources in Cranny, which can be saved from robbery. The value of 1 is equal to 1000 for Romans and Teutons, 2000 for Gauls. If you set the value to 2, then the capacity of the Cranny will double to 2000 and 4000 respectively.");
define("CONF_SERV_TRAPCAPACITY","Trapper Capacity");
define("CONF_SERV_TRAPCAPACITY_TOOLTIP","A multiplier for the capacity of the trap of the Gauls, which can capture enemy soldiers even before attacking the village. The value of 1 is equal to the capacity of 400 at the 20 level of construction. If you set the value to 2, then the capacity will be 800.");
define("CONF_SERV_NATUNITSMULTIPLIER","Natars Units Multiplier");
define("CONF_SERV_NATUNITSMULTIPLIER_TOOLTIP","This parameter is responsible for the number of troops of Natars, on artifacts and WW villages.");
define("CONF_SERV_NATARS_SPAWN_TIME","Natars Spawn");
define("CONF_SERV_NATARS_SPAWN_TIME_TOOLTIP","After how long Natars and artifacts will spawn from the start date of the server, in days");
define("CONF_SERV_NATARS_WW_SPAWN_TIME","World Wonders Spawn");
define("CONF_SERV_NATARS_WW_SPAWN_TIME_TOOLTIP","After how long WW villages will spawn from the start date of the server, in days");
define("CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME","WW Building Plan Spawn");
define("CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME_TOOLTIP","After how long WW building plans will spawn from the start date of the server, in days");
define("CONF_SERV_MAPSIZE","Map Size");
define("CONF_SERV_MAPSIZE_TOOLTIP","The size of the map of the game world. Can not be changed on an already installed game server.");
define("CONF_SERV_VILLEXPSPEED","Village Expanding Speed");
define("CONF_SERV_VILLEXPSPEED_TOOLTIP","Speed, which affects the expansion of the empire. With a slow speed more culture points are needed to found new village, with a fast speed the required number of culture points is reduced.");
define("CONF_SERV_BEGINPROTECT","Beginners Protection");
define("CONF_SERV_BEGINPROTECT_TOOLTIP","Protection, which prohibits a certain time to attack the villages of new players.");
define("CONF_SERV_REGOPEN","Register Open");
define("CONF_SERV_REGOPEN_TOOLTIP","Allows to enable (True) or disable (False) the registration of players on the game server.");
define("CONF_SERV_ACTIVMAIL","Activation Mail");
define("CONF_SERV_ACTIVMAIL_TOOLTIP","If enabled (Yes), during registration it will be necessary to confirm email address. If disabled (No) does not require confirmation of e-mail.");
define("CONF_SERV_QUEST","Quest");
define("CONF_SERV_QUEST_TOOLTIP","Enable (Yes) or disable (No) the quest on the game server.");
define("CONF_SERV_QTYPE","Quest Type");
define("CONF_SERV_QTYPE_TOOLTIP","The quest type can be official which is a bit shorter, and extended which is longer.");
define("CONF_SERV_DLR","Demolish - Level required");
define("CONF_SERV_DLR_TOOLTIP","The required level of the main building, on which can carry out the demolition of buildings in the village.");
define("CONF_SERV_WWSTATS","World Wonder - Statistics");
define("CONF_SERV_WWSTATS_TOOLTIP","Enable (True) or disable (False) the display in the statistics of villages with a Wonder of the World.");
define("CONF_SERV_NTRTIME","Nature Troops Regeneration Time");
define("CONF_SERV_NTRTIME_TOOLTIP","Time through which the nature troops will be restored in oases.");
define("CONF_SERV_OASIS_WOOD_PROD_MULT","Oasis Wood Production Multiplier");
define("CONF_SERV_OASIS_WOOD_PROD_MULT_TOOLTIP","The base wood oasis production");
define("CONF_SERV_OASIS_CLAY_PROD_MULT","Oasis Clay Production Multiplier");
define("CONF_SERV_OASIS_CLAY_PROD_MULT_TOOLTIP","The base clay oasis production");
define("CONF_SERV_OASIS_IRON_PROD_MULT","Oasis Iron Production Multiplier");
define("CONF_SERV_OASIS_IRON_PROD_MULT_TOOLTIP","The base iron oasis production");
define("CONF_SERV_OASIS_CROP_PROD_MULT","Oasis Crop Production Multiplier");
define("CONF_SERV_OASIS_CROP_PROD_MULT_TOOLTIP","The base crop oasis production");
define("CONF_SERV_MEDALINTERVAL","Medal Interval");
define("CONF_SERV_MEDALINTERVAL_TOOLTIP","The time interval for issuing medals for the top players and alliances. If this parameter is changed on the installed server, the time interval changes after the subsequent issuance of the medals.");
define("CONF_SERV_TOURNTHRES","Tourn Threshold");
define("CONF_SERV_TOURNTHRES_TOOLTIP","The number of squares on the game map, after which Tournament Square will start working.");
define("CONF_SERV_GWORKSHOP","Great Workshop");
define("CONF_SERV_GWORKSHOP_TOOLTIP","Enable (True) or disable (False) the use of a Great Workshop in the game.");
define("CONF_SERV_NATARSTAT","Show Natars in Statistics");
define("CONF_SERV_NATARSTAT_TOOLTIP","Enable (True) or disable (False) the display of the Natars account in statistics.");
define("CONF_SERV_PEACESYST","Peace system");
define("CONF_SERV_PEACESYST_TOOLTIP","Enable or disable the Peace system. When the peace system is activated, players will be able to attack each other but instead of any actions in the reports there will be a congratulatory inscription. The troops will not die of hunger.");
define("CONF_SERV_GRAPHICPACK","Graphic Pack");
define("CONF_SERV_GRAPHICPACK_TOOLTIP","Enable (Yes) or disable (No) the ability to use the graphics package.");
define("CONF_SERV_ERRORREPORT","Error Reporting");
define("CONF_SERV_ERRORREPORT_TOOLTIP","Enable (Yes) or disable (No) the display of error reports on the game server.");

//Admin setting - Admin/Templates/config.tpl & editPlusSet.tpl
define("PLUS_CONFIGURATION","<b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> Configuration");
define("PLUS_SETT","<b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> Settings");
define("EDIT_PLUS_SETT","Edit <b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> Setting");
define("EDIT_PLUS_SETT1","Edit PLUS Setting");
define("CONF_PLUS_PAYPALEMAIL","<a href='https://www.paypal.com' target='_blank'>PayPal</a> E-Mail Address");
define("CONF_PLUS_PAYPALEMAIL_TOOLTIP","The E-Mail Address specified at registration on PayPal.<br><font color='red'><b>Must be Business or Premier account!</b></font>");
define("CONF_PLUS_CURRENCY","Payment Currency");
define("CONF_PLUS_CURRENCY_TOOLTIP","The currency to be used for payment.");
define("CONF_PLUS_PACKAGEGOLDA","Package \"A\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDA_TOOLTIP","The amount of gold issued for the payment of the package \"A\".");
define("CONF_PLUS_PACKAGEPRICEA","Package \"A\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEA_TOOLTIP","The amount necessary to pay the cost of package \"A\".");
define("CONF_PLUS_PACKAGEGOLDB","Package \"B\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDB_TOOLTIP","The amount of gold issued for the payment of the package \"B\".");
define("CONF_PLUS_PACKAGEPRICEB","Package \"B\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEB_TOOLTIP","The amount necessary to pay the cost of package \"B\".");
define("CONF_PLUS_PACKAGEGOLDC","Package \"C\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDC_TOOLTIP","The amount of gold issued for the payment of the package \"C\".");
define("CONF_PLUS_PACKAGEPRICEC","Package \"C\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEC_TOOLTIP","The amount necessary to pay the cost of package \"C\".");
define("CONF_PLUS_PACKAGEGOLDD","Package \"D\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDD_TOOLTIP","The amount of gold issued for the payment of the package \"D\".");
define("CONF_PLUS_PACKAGEPRICED","Package \"D\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICED_TOOLTIP","The amount necessary to pay the cost of package \"D\".");
define("CONF_PLUS_PACKAGEGOLDE","Package \"E\" Amount of Gold");
define("CONF_PLUS_PACKAGEGOLDE_TOOLTIP","The amount of gold issued for the payment of the package \"E\".");
define("CONF_PLUS_PACKAGEPRICEE","Package \"E\" Amount of Price");
define("CONF_PLUS_PACKAGEPRICEE_TOOLTIP","The amount necessary to pay the cost of package \"E\".");
define("CONF_PLUS_ACCDURATION","<b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> account duration");
define("CONF_PLUS_ACCDURATION_TOOLTIP","The duration of the game function <b><font color='#71D000'>P</font><font color='#FF6F0F'>l</font><font color='#71D000'>u</font><font color='#FF6F0F'>s</font></b> for the account at the time of activation by the player.");
define("CONF_PLUS_PRODUCTDURATION","+25% production duration");
define("CONF_PLUS_PRODUCTDURATION_TOOLTIP","The duration of the game function +25% production duration for the account at the time of activation by the player.");

//Admin setting - Admin/Templates/config.tpl & editLogSet.tpl
define("LOG_SETT","Log Settings");
define("EDIT_LOG_SETT","Edit Log Setting");
define("CONF_LOG_BUILD","Log Build");
define("CONF_LOG_BUILD_TOOLTIP","Enable (Yes) or disable (No) the display of logs for the construction of buildings in the village.");
define("CONF_LOG_TECHNOLOGY","Log Technology");
define("CONF_LOG_TECHNOLOGY_TOOLTIP","Enable (Yes) or disable (No) display logs to improve troops in Blacksmith and Armoury.");
define("CONF_LOG_LOGIN","Log Login");
define("CONF_LOG_LOGIN_TOOLTIP","Enable (Yes) or disable (No) the display logs players login the game.");
define("CONF_LOG_GOLD","Log Gold");
define("CONF_LOG_GOLD_TOOLTIP","Enable (Yes) or disable (No) the display of gold use logs in-game by players.");
define("CONF_LOG_ADMIN","Log Admin");
define("CONF_LOG_ADMIN_TOOLTIP","Enable (Yes) or disable (No) the display of logs for administrator actions in the control panel.");
define("CONF_LOG_WAR","Log War");
define("CONF_LOG_WAR_TOOLTIP","Enable (Yes) or disable (No) the display of logs attacks on players in the game.");
define("CONF_LOG_MARKET","Log Market");
define("CONF_LOG_MARKET_TOOLTIP","Enable (Yes) or disable (No) the display of the logs of the use of the market in the game by the players.");
define("CONF_LOG_ILLEGAL","Log Illegal");
define("CONF_LOG_ILLEGAL_TOOLTIP","Enable (Yes) or disable (No) the display of illegal logs. (I do not know exactly what it is)");

//Admin setting - Admin/Templates/config.tpl & editNewsboxSet.tpl
define("NEWSBOX_SETT","Newsbox Settings");
define("EDIT_NEWSBOX_SETT","Edit Newsbox Setting");
define("EDIT_NEWSBOX1","Newsbox 1");
define("EDIT_NEWSBOX1_TOOLTIP","Enable or disable the display of the Newsbox 1. Displayed on the authorization page and on the game pages.");
define("EDIT_NEWSBOX2","Newsbox 2");
define("EDIT_NEWSBOX2_TOOLTIP","Enable or disable the display of the Newsbox 2. Displayed on the authorization page and on the game pages.");
define("EDIT_NEWSBOX3","Newsbox 3");
define("EDIT_NEWSBOX3_TOOLTIP","Enable or disable the display of the Newsbox 3. Displayed on the authorization page and on the game pages.");

//Admin setting - Admin/Templates/config.tpl SQL Settings
define("SQL_SETTINGS","SQL Settings");
define("CONF_SQL_HOSTNAME","Hostname");
define("CONF_SQL_HOSTNAME_TOOLTIP","The name of the server where MySQL is started (by default is: localhost).");
define("CONF_SQL_PORT","Port");
define("CONF_SQL_PORT_TOOLTIP","MySQL port for remote connection. The standard port for connecting is: 3306.");
define("CONF_SQL_DBUSER","DB Username");
define("CONF_SQL_DBUSER_TOOLTIP","The user name to connect to the database.");
define("CONF_SQL_DBPASS","DB Password");
define("CONF_SQL_DBPASS_TOOLTIP","Password from the user to connect to the database.");
define("CONF_SQL_DBNAME","DB Name");
define("CONF_SQL_DBNAME_TOOLTIP","Name of the database to which you are connecting.");
define("CONF_SQL_TBPREFIX","Table Prefix");
define("CONF_SQL_TBPREFIX_TOOLTIP","The prefix used for the database tables.");
define("CONF_SQL_DBTYPE","DB Type");
define("CONF_SQL_DBTYPE_TOOLTIP","The type of database used.");

//Admin setting - Admin/Templates/config.tpl & editExtraSet.tpl
define("EXTRA_SETT","Extra Settings");
define("EDIT_EXTRA_SETT","Edit Extra Settings");
define("CONF_EXTRA_LIMITMAIL","Limit Mailbox");
define("CONF_EXTRA_LIMITMAIL_TOOLTIP","Enable (Yes) or disable (No) the mailbox limit.");
define("CONF_EXTRA_MAXMAIL","Max number of mails");
define("CONF_EXTRA_MAXMAIL_TOOLTIP","The maximum number of messages that can fit in the mailbox.");

//Admin setting - Admin/Templates/config.tpl & editAdminInfo.tpl
define("ADMIN_INFO","Admin Information");
define("EDIT_ADMIN_INFO","Edit Admin Information");
define("CONF_ADMIN_NAME","Admin Name");
define("CONF_ADMIN_NAME_TOOLTIP","Name for the administrator account.");
define("CONF_ADMIN_EMAIL","Admin E-Mail");
define("CONF_ADMIN_EMAIL_TOOLTIP","The email address for the administrator account.");
define("CONF_ADMIN_SHOWSTATS","Include Admin in Stats");
define("CONF_ADMIN_SHOWSTATS_TOOLTIP","Enable (True) or disable (False) the display of the administrator account in the general statistics of players.");
define("CONF_ADMIN_SUPPMESS","Include Support Messages");
define("CONF_ADMIN_SUPPMESS_TOOLTIP","Enable (True) or disable (False) the sending of messages to the mailbox of the administrator addressed to Support.");
define("CONF_ADMIN_RAIDATT","Allow Raided and Attacked");
define("CONF_ADMIN_RAIDATT_TOOLTIP","Enable (True) or disable (False) the ability to Raided and Attacked an administrator.");

/*
|--------------------------------------------------------------------------
|   Index
|--------------------------------------------------------------------------
*/

	   $lang['index'][0][1] = "歡迎來到 " . SERVER_NAME . "";
	   $lang['index'][0][2] = "手冊";
	   $lang['index'][0][3] = "現在就能免費遊玩!";
	   $lang['index'][0][4] = "什麼是 " . SERVER_NAME . "";
	   $lang['index'][0][5] = "Travian曾是風靡全球的網頁遊戲，此版本是由開源社區開發者貢獻的經典T3.6版本TravianZ，詳見GitHub。漢化文本由Muchen Fan完成。本伺服器僅供測試、交流、學習之用。請不要使用遊戲內的儲值介面。" . SERVER_NAME . " is a <b>browser game</b> featuring an engaging ancient world with thousands of other real players.</p><p>It`s <strong>free to play</strong> and requires <strong>no downloads</strong>.";
	   $lang['index'][0][6] = "點擊此處即刻開始遊玩 " . SERVER_NAME . "";
	   $lang['index'][0][7] = "玩家總數";
	   $lang['index'][0][8] = "活躍玩家";
	   $lang['index'][0][9] = "在線玩家";
	   $lang['index'][0][10] = "關於遊戲";
	   $lang['index'][0][11] = "你將從一個小村莊的頭領開始，譜寫英雄的故事。";
	   $lang['index'][0][12] = "建立村莊，發動戰爭，與鄰居建立貿易路線。";
	   $lang['index'][0][13] = "與其他真實玩家或對抗、或合作，征服Travian遊戲世界。";
	   $lang['index'][0][14] = "新聞";
	   $lang['index'][0][15] = "FAQ";
	   $lang['index'][0][16] = "截圖";
	   $lang['forum'] = "論壇";
	   $lang['register'] = "註冊";
	   $lang['login'] = "登錄";
	   $lang['screenshots']['title1']="村莊";
	   $lang['screenshots']['desc1']="村莊建築";
           $lang['screenshots']['title2']="資源";
           $lang['screenshots']['desc2']="村莊資源分為木材、黏土、鐵礦和糧食";
           $lang['screenshots']['title3']="地圖";
           $lang['screenshots']['desc3']="你的村莊在地圖上的位置";
           $lang['screenshots']['title4']="建造建築";
           $lang['screenshots']['desc4']="建造建築和提升等級的方式";
           $lang['screenshots']['title5']="報告";
           $lang['screenshots']['desc5']="你的攻擊報告";
           $lang['screenshots']['title6']="統計";
           $lang['screenshots']['desc6']="在統計中查看你的排名";
           $lang['screenshots']['title7']="狼或羊";
           $lang['screenshots']['desc7']="你可以選擇發展軍事或是發展經濟、或是兩者齊頭並進";


?>
