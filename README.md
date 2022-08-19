# Netlogix.BreakpointConditionalContent

This package adds a simple node type that receives a subset of one or multiple editor-selectable classes with the intention to control the display of content dependent on device breakpoints.

### Intended use case and styling

The content element created by this package is intended to be used as a container to wrap the content which needs to be displayed conditionally. 
This container then receives classes (see below) that require to be styled as needed, for example by setting the base class to 'display: none;' and then using media-queries to re-enable the display for a given breakpoint.

### Base class

The wrapper receives a base class of 'breakpoint-conditional-content' irrespective of selected breakpoints.

### Available breakpoints

- xs:
    - intended for Mobile / Extra small
    - assigned class: 'breakpoint-xs'
- sm:
    - intended for Mobile / Small
    - assigned class: 'breakpoint-xs'
- md:
    - intended for Tablet / Medium
    - assigned class: 'breakpoint-md'
- lg:
    - intended for Desktop / Large
    - assigned class: 'breakpoint-lg'
- xl:
    - intended for Desktop / Extra large
    - assigned class: 'breakpoint-xl'
