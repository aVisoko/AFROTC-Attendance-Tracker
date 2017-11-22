SELECT usersinfo.f_name, usersinfo.l_name,  week_1.llab, week_2.llab, week_3.llab, week_4.llab, week_5.llab, week_6.llab, 
											week_7.llab, week_8.llab, week_9.llab, week_10.llab, week_11.llab, week_12.llab,
                                            week_13.llab, week_14.llab, week_15.llab, week_16.llab

 FROM usersinfo 
								  join week_1 ON usersinfo.username = week_1.username
                                  join week_2 ON week_1.username = week_2.username
                                  join week_3 ON week_2.username = week_3.username
                                  join week_4 ON week_3.username = week_4.username
                                  join week_5 ON week_4.username = week_5.username
                                  join week_6 ON week_5.username = week_6.username
                                  join week_7 ON week_6.username = week_7.username
								  join week_8 ON week_7.username = week_8.username
								  join week_9 ON week_8.username = week_9.username
							      join week_10 ON week_9.username = week_10.username
								  join week_11 ON week_10.username = week_11.username
								  join week_12 ON week_11.username = week_12.username
								  join week_13 ON week_12.username = week_13.username
								  join week_14 ON week_13.username = week_14.username
								  join week_15 ON week_14.username = week_15.username
								  join week_16 ON week_15.username = week_16.username
                                 
                                 
                                 
									WHERE week_1.llab = 1 AND week_2.llab = 1 AND week_3.llab =1 AND week_4.llab = 1 AND week_5.llab =1 AND week_6.llab =1 AND week_7.llab = 1
                                    AND	week_8.llab = 1 AND week_9.llab = 1 AND week_10.llab =1 AND week_11.llab = 1 AND week_12.llab =1 AND week_13.llab = 1 AND week_14.llab = 1
									AND week_15.llab = 1 AND week_16.llab = 1;