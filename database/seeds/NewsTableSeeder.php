<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'title' => '助成金管理システム開始！',
                'category' => 'システム',
                'detail' => 'この度、Go to campaignの影響でクーポン使用の旅行が急増したため、管理可能のシステムをスタートすることにしました。',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => '東海地方の料金割引',
                'category' => 'サービス',
                'detail' => '顧客が選ぶ旅行先第一位に選ばれた東海地方の料金割引がさらに10%割引になりました。',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => '月末のシステムメンテナンスについて',
                'category' => 'システム',
                'detail' => '毎月実施している月末のシステムメンテナンスですが、21:00～3:00に実施予定です。その間はシステムのご利用ができませんのでご了承ください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => '登録顧客数100万人突破！',
                'category' => 'その他',
                'detail' => '登録顧客数100万人突破いたしました！',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => '登録顧客数150万人突破！',
                'category' => 'その他',
                'detail' => '登録顧客数150万人突破いたしました！',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => '登録顧客数200万人突破！',
                'category' => 'その他',
                'detail' => '登録顧客数200万人突破いたしました！',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => '登録顧客数250万人突破！',
                'category' => 'その他',
                'detail' => '登録顧客数250万人突破いたしました！',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => '臨時メンテナンスのお知らせ',
                'category' => 'システム',
                'detail' => 'システム不具合発見のため、臨時でメンテナンスを行います。ご迷惑をおかけし、申し訳ございません。',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => '九州地方のクーポン券追加配布',
                'category' => 'サービス',
                'detail' => '九州地方のクーポン券が追加で配布を開始いたしました。詳しくは各旅館・ホテルのサイトをご確認ください。',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => '卒業旅行キャンペーン',
                'category' => 'サービス',
                'detail' => '学生を対象とした卒業旅行のキャンペーンが開始いたしました。各旅行プランにつき、学生証提示でさらに10%割引いたします。期間は2月15日～4月15日まで実施いたします。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);  
    }
}
