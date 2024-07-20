<template>
    <component
        :is="`detail-code-field`"
        :field="field"
    />
</template>

<script>
export default {
    props: ['field'],
}
</script>
