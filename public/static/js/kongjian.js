	        var doFinger = false;
	        var memberIdx = 0;
	        var fingerIdx = 1;
	        var fingerImageId = "";
	        var fingerImageStr = "data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCACWAJYDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwCOiiius84KKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKfBBNdXCQQRtJK5AAA/nQBGTz9TxWxp3hfWNTw8dq0UPeSQbf0PWugi0zSvCUEcuoRf2jqzn93bx/MQP93+tVn1HVdU1Z7fVNRbSLVV3LD90lfTNRzdjXkS3GnwfpluxXUPEdtGwHKAhSP1rA1y103Tr1IdNvxdwlNxfdnB+orcnn8D2U+ZbK51Cb+KRcybj+dS/wBveEkjP/FM3aR46iD/AOvSTYOKfYgtfBq6hp6XNhq0E0rICYQBnPp14rF1DRtT0piLyzkRezgZX8x0robN/CV8XOnS3WkzseHdyoz9M1oNPreiwu96ya9pLcL5aguo7kjHNHM0PkizgAQRkGlrrdS8OWWqaf8A2v4cYGMD95bDkg/0+lciDg4IwRwQexq07mcotC0UUUyQooooAKKKKACiiigAooooATBLBVGWJwAO5rubGOLwdo8Nw0Rl1nUPkhj6gE9Pp2rktMtb64uhPY23ntakSsOwxzz+VdV4enl1TVtR8Rar9y1ixHEw+VCPTPQ8VEjSA+5uI/CMD3Ny63niW6Ab5gSFB9Pyqr/Yomik1rxfdGJGwUiU8sD2IH1p+kujR3PjLWwD8xS3iYZBHQYqa0sVvopPEvieVlgB3W9qx+Xb9Kkvcfaa1mEweE9A85V/ilAwR9SambU/HQAJ8PWRHoMcfrVGLxPquu3R0/QraG1iCkrjghRxmrI8P+IYj5sXiZppx/ywLf8A16Ldx3vsczfXT6jr8R12JdPQ/JI0KfdraNlq3g8f2hpUovdLmALBjk7fU1al1qYTLpXi7S444pBtW6A4HvTYmfwfeIjzG80C+IRCzZEee/8AOnclJLUnJhiiHivw5uYH5Lq1/hYdyB69Ko+LtGhubODxBpSj7PMu+cfXoQPxqxbqPCPjFbQM50i+TPzfdUn+vFX9Ftha3+reGryTMFzmW2z/AHWzwPpip21KtdWZ5wCCAQeKKnvrT+z9RuLLn9y5UZ9O1QVqYNWCiiimIKKKKACiiigAooooA7HwmTZ+Dtcvwdsu1lVh7Dj+dVbiaex+GFid37+9nxIw6sGJq7oqeZ8M9YC9QXJ/KqmuD/iiPDcv/LPegJ9zWfU22j8i/rdss2q6H4XjG23ZBMfTvUmrxp4g8XWejo+3T7Nf3qDpkdj+VP1ScWvxM0aZsCNrTaSR061JplgbDxH4lOSXki85CffdUlHPRaYdR8VagNLnawsrcYeVSRtA68++KLRNL1G/NlY6pfQXfO2eQkI59jmnWPmx+FdYlTO+SQiT6c0uo2NqvgDT9Rt4wsyyDc4+tUSXtNuptTkuvC/iBfNufmW2mZemB1z+HWs2y0G51O01Kymv3I0zISE8g4zj6dK0NdnL+I/Dd+vDzrGCR9a0NPAg+JOt2gH7ue23498f/XpDtd6mRe3Dar8M0vZGLXFjKMsevB/+vV3Vb5otY8I6sud1yojfHoQP8aztAQ3Hw31xMf8ALy3H4irWuHb4L8PXKEeZDGjJ7HijyDW1yh44szb+Kp5sYWdQR+Arnqu6nrN7rU0ct6U3RrtUIOMVSrRaIyk03dBRRRTJCiiigAooooAKKKKAOw8ETwT6VqujXEqxidSULHrkEHH0qPU7fPw0toS277NdsqsPRWIFckHMTb1ZlYDqpwa6zUN9j8MLGOTJee44HruJNZtamsZXVjU8U/6RYaLfIuJTIqAjrjFaNzJs8fW0Ha4tQr/gDVLxdcppWnaQiKHaJ1fYe/yms7QtVl13xzDfyrsWKMqF/ujBqeho3Z2HaVGv2fxZYkcR7iv61UVvM+EFwD1ikAH/AH1/9erWjN5l14tuB90K4/nVQYi+EkgYczy8D/gX/wBamR/wSbW1KTeDlI+YbM/pWrb/APJV9Q/68z/IVzJtNTh1fQRqMwl8x42gAOdigjg10VhJ5nxY1RhyotCM++BQxrcreGkC+F9diA+UXDHH5Vz1vot1deF5NVN4TDbvtW3YZx05BzxXQeGXD+FtdmHQ3DD+VQ6XIifDK/Uuu4ynjP0ouK10r9jjwcgGlpqcIBTq1MQooooAKKKKACiiigAooooACAQQelX7S/33Wnx6jO5sbWQMFx90ZqhSEZFIadj0Kzlg8QeKpdeBDaZp8RjiY8Avj0/Gs7w632fSfEmvMAguGYRex9vzFc6NYuU8OSaKiqsLtuZx941q3OpR6pp+keHtNGyOQKtycYyeM/Wos0aqSZNZSHS/h9c305xLqTGPHuc1JrstoPC+k6NaTiWRnV8D0zWnqFjDq2p2Ph2J/wDRdMQSXLBflJGMA+meaztD061vvG0tzZRAaZaEtuA+UkDGP60vMduhoX8azfEHR7cH5LeDcfbj/wCtUHhp1k8U+Ib8n5Yg6k/5+lU9PvFn1DxFqssygxIwtcnkg5xiszRtdj0/RdSieJjdXq4Jz655/WnbQXMr3NDw5Ktt8PdZJYA/aSeT64rkhGCQxzkds8flT1LBCgY7D1XPBpQKtKxm5XsFFFFMkKKKKACiiigAooooAKKKKACiiigApUd4pVljYpIpyrDqDSUUAWItRv4JJ5Irp1e4GJmzy/1NFrqN/YW8lvZ3JhhlOZFUdT9e1V6KWg7sBkAgEgHqM9aKKKYgooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigD/9k=";
			
			//加载事件
			function LoadAttachEvent()
			{			
		    ZKFPM.attachEvent("OnAsynExecuted",AsynExecuted);	
			}
			//分离事件
			function UnloadDetachEvent()
			{			
				ZKFPM.detachEvent("OnAsynExecuted",AsynExecuted);
				ZKFPM.disConn();
			}
			//监听事件
			function AsynExecuted(szCmdName,szEventName,szResult,szValue)
			{
				console.log("AsynExecuted{szCmdName="+szCmdName+"}{szEventName="+szEventName+"}{szResult="+szResult+"}{szValue="+szValue+"}");
				if( szEventName =="InfoMation")
				{
					$("#request-process-patent").html("正在采集指纹特征点," + szValue); 
				}
				else if(szEventName =="ExecResult")
				{
					if(szResult==0){
						if(szValue != null){
						   if(fingerIdx == 1){
							reqJson.members[memberIdx].fingerImage1 = szValue;
						   }
					       reqJson.members[memberIdx].fingerImage2 = szValue;
				    	   $("#" + fingerImageId).attr('src',fingerImageStr); 
				    		$("#request-process-patent").html("采集指纹成功");
    	   	 			}  		
					}else{
						$("#request-process-patent").html("采集指纹失败,重新采集：" +　szValue);   	   
					}
					doFinger = false;
				}
		 }	