# FR-006-008 WordpressUI: WordPress Display & Sync of Recommendation Plan

**Related:** BR-006 Recommendation, FR-006-001..006

## Description
The WordPress site renders a client's Recommendation plan and provides a sync bridge to PersonalRecordsOrganizer.

## Primary actor
System (renders on shortcode) / Advisor (initiates sync).

## Main flow
1. Advisor embeds `[ksf_recommendation_plan debtor="123"]`. 2. System loads and renders the plan. 3. Advisor syncs to PRO (fa_record_id linkage).

## Postconditions
Recommendation plan visible on WordPress; PRO record updated.
