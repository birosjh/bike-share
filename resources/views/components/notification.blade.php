<div v-show="notification.notify" class="notification" :class="notification.status" v-cloak>
    @{{ notification.message }}
</div>
