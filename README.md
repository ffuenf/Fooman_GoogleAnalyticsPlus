## Fork of [Fooman_GoogleAnalyticsPlus](http://www.magentocommerce.com/magento-connect/fooman-googleanalyticsplus.html)

Meant to extend the functionality of the GoogleAnalyticsPlus module:

### [_trackPageLoadTime](https://developers.google.com/analytics/devguides/collection/gajs/methods/gaJSApiBasicConfiguration#_gat.GA_Tracker_._trackPageLoadTime) replaced by [_setSiteSpeedSampleRate](https://developers.google.com/analytics/devguides/collection/gajs/methods/gaJSApiBasicConfiguration#_gat.GA_Tracker_._setSiteSpeedSampleRate)

The _trackPageLoadTime is deprecated, now using the more functional _setSiteSpeedSampleRate.

### Tracking of the checkout steps reported wrong numbers, rewritten the checkout steps.
