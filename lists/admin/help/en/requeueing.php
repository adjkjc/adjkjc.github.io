<p>Requeing a campaign lets you automatically resend the same campaign at a regular interval. 
In this way the campaign will be sent to any new subscribers, but not to those who have already received it.
</p>
<p>You need to select:
<ul><li>The "requeue interval" -  hour, day or week. </li>
<li>The "requeue until" date/time after which phplist will stop requeuing the campaign.</li>
<li>The embargo date/time - this is the date/time when the campaign will be first sent but also should reflect
the time of day/day of week when you want the campaign to be regularly sent.</li>
</ul>
<p>When the campaign has finished sending, phplist will resubmit it and increase the embargo time by the requeue interval.
<br>If the requeue interval is 'hour' then the embargo time will remain at the same minute of the hour,
e.g. the campaign will be sent at 08:30, then 09:30 and so on.
<br>If the requeue interval is 'day' then the embargo time will remain at the same hour and minute of the day,
e.g the campaign will be sent at 15 March 08:30, then 16 March 08:30 and so on.
<br>If the requeue interval is 'week' then the embargo time will remain at the same day of week, hour and minute of the day,
e.g the campaign will be sent at 08:30 15 March, then 08:30 22 March and so on.
</p>
