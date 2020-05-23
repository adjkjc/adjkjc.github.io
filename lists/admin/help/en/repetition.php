<p>Repeating a campaign lets you automatically send a copy of the campaign at a regular interval. 
The new campaign will be sent to all subscribers of the selected lists, so this approach is useful only when the campaign has
dynamic content, such as sending a web page or for an RSS campaign.
</p>
<p>You need to select:
<ul><li>The "repeat interval" -  hour, day, week, fortnight or four weeks. </li>
<li>The "repeat until" date/time after which phplist will stop repeating the campaign.</li>
<li>The embargo time - this is the date/time when the campaign will be first sent but also should reflect
the time of day/day of week when you want the new campaigns to be regularly sent.</li>
</ul>
<p>When the campaign has finished sending, phplist will create a copy of the campaign and increase the embargo time by the repeat interval.
<br>If the repeat interval is 'hour' then the embargo time will remain at the same minute of the hour,
e.g. the first campaign will be sent at 08:30, the next at 09:30 and so on.
<br>If the repeat interval is 'day' then the embargo time will remain at the same hour and minute of the day,
e.g the first campaign will be sent at 15 March 08:30, the next at 16 March 08:30 and so on.
<br>If the repeat interval is 'week', 'fortnight' or 'four weeks' then the embargo time will remain at the same day of week, hour and minute of the day,
e.g the first campaign will be sent at 08:30 15 March, the next at 08:30 22 March and so on.
</p>
<p>You can also specify dates on which the repeated message should not be sent. 
See the <a href="https://resources.phplist.com/system/config/use_repetition" target="_blank">USE_REPETITION documentation</a> for how to control this.
If the embargo time for a repeated campaign should be excluded then phplist will increase it by the repeat interval.
</p>. 
